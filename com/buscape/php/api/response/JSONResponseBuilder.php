<?php
require_once 'com/buscape/php/api/response/Address.php';
require_once 'com/buscape/php/api/response/AddressList.php';
require_once 'com/buscape/php/api/response/Category.php';
require_once 'com/buscape/php/api/response/Contact.php';
require_once 'com/buscape/php/api/response/ContactList.php';
require_once 'com/buscape/php/api/response/EBitRating.php';
require_once 'com/buscape/php/api/response/Item.php';
require_once 'com/buscape/php/api/response/Link.php';
require_once 'com/buscape/php/api/response/LinkList.php';
require_once 'com/buscape/php/api/response/Map.php';
require_once 'com/buscape/php/api/response/OfferPrice.php';
require_once 'com/buscape/php/api/response/OfferParcel.php';
require_once 'com/buscape/php/api/response/Rating.php';
require_once 'com/buscape/php/api/response/ResponseBuilder.php';
require_once 'com/buscape/php/api/response/ResultDetails.php';
require_once 'com/buscape/php/api/response/Specification.php';
require_once 'com/buscape/php/api/response/Seller.php';
require_once 'com/buscape/php/api/response/Thumbnail.php';
require_once 'com/buscape/php/api/response/UserAverageRating.php';

/**
 * Constroi o objeto de resultado de uma resposta no formato
 * JSON.
 */
class JSONResponseBuilder extends ResponseBuilder {
	/**
	 * @param	string $content
	 * @return	ResponseBuilder
	 * @see		ResponseBuilder::parse()
	 */
	public function parse( $content ) {
		$json = json_decode( $content );

		if ( isset( $json->category ) ) {
			$this->result->setCategory( $this->parseCategory( $json->category ) );
		}

		if ( isset( $json->details ) ) {
			$this->parseDetails( $json->details );
		}

		if ( isset( $json->match ) ) {
			$this->result->setMatch( $json->match );
		}

		if ( isset( $json->page ) ) {
			$this->result->setPage( $json->page );
		}

		if ( isset( $json->offer ) ) {
			foreach ( $json->offer as $o ) {
				$this->result->addOffer( $this->parseOffer( $o->offer ) );
			}
		}

		if ( isset( $json->product ) ) {
			foreach ( $json->product as $p ) {
				$this->result->addProduct( $this->parseProduct( $p->product ) );
			}
		}

		if ( isset( $json->seller ) ) {
			$this->result->setSeller( $this->parseSeller( $json->seller ) );
		}

		if ( isset( $json->subcategory ) ) {
			foreach ( $json->subcategory as $s ) {
				$this->result->addSubCategory( $this->parseCategory( $s->subcategory ) );
			}
		}

		if ( isset( $json->top5category ) ) {
			foreach ( $json->top5category as $t ) {
				$this->result->addTop5Category( $this->parseCategory( $t->top5category ) );
			}
		}

		if ( isset( $json->totalpages ) ) {
			$this->result->setTotalPages( $json->totalpages );
		}

		if ( isset( $json->totalresultsavailable ) ) {
			$this->result->setTotalResultsAvailable( $json->totalresultsavailable );
		}

		if ( isset( $json->totalresultssellers ) ) {
			$this->result->setTotalResultsSellers( $json->totalresultssellers );
		}

		if ( isset( $json->totalresultsreturned ) ) {
			$this->result->setTotalResultsReturned( $json->totalresultsreturned );
		}

		return $this;
	}

	/**
	 * @param	array $addresses
	 * @return	AddressList
	 */
	private function parseAddresses( array $addresses ) {
		$addressList = new AddressList();

		foreach ( $addresses as $a ) {
			$address = new Address();
			$address->setCity( $a->address->city );
			$address->setComplement( $a->address->complement );
			$address->setDistrict( $a->address->district );
			$address->setFone( $a->address->fone );
			$address->setMap( $this->parseMap( $a->address->map ) );
			$address->setName( $a->address->name );
			$address->setPostalArea( $a->address->postalarea );
			$address->setPostalCode( $a->address->postalcode );
			$address->setState( $a->address->state );

			$addressList->addAddress( $address );
		}

		return $addressList;
	}

	/**
	 * @param	stdClass $c
	 * @return	Category
	 */
	private function parseCategory( stdClass $c ) {
		$category = new Category();
		$category->setHasOffer( $c->hasoffer );
		$category->setId( $c->id );
		$category->setIsFinal( $c->isfinal );
		$category->setLinks( $this->parseLinks( $c->links ) );
		$category->setName( $c->name );
		$category->setParentCategoryId( $c->parentcategoryid );
		$category->setThumbnail( $this->parseThumbnail( $c->thumbnail ) );

		return $category;
	}

	/**
	 * @param	array $contacts
	 * @return	ContactList
	 */
	private function parseContacts( array $contacts ) {
		$contactList = new ContactList();

		foreach ( $contacts as $c ) {
			$contact = new Contact();
			$contact->setLabel( $c->contact->label );
			$contact->setValue( $c->contact->value );

			$contactList->addContact( $contact );
		}

		return $contactList;
	}

	/**
	 * @param	stdClass $d
	 */
	private function parseDetails( stdClass $d ) {
		$resultDetails = new ResultDetails();
		$resultDetails->setApplicationId( $d->applicationid );
		$resultDetails->setApplicationPath( $d->applicationpath );
		$resultDetails->setApplicationVersion( $d->applicationversion );
		$resultDetails->setCode( $d->code );
		$resultDetails->setDate( mktime(
			$d->date->hour,
			$d->date->minute,
			$d->date->second,
			$d->date->month,
			$d->date->day,
			$d->date->year
		) );
		$resultDetails->setElapsedTime( $d->elapsedtime );
		$resultDetails->setMessage( $d->message );
		$resultDetails->setStatus( $d->status );

		$this->result->setDetails( $resultDetails );
	}

	/**
	 * @param	stdClass $e
	 * @return	EBitRating
	 */
	private function parseEBitRating( stdClass $e ) {
		$eBitRating = new EBitRating();
		$eBitRating->setNumComments( $e->numcomments );
		$eBitRating->setRating( $e->rating );

		return $eBitRating;
	}

	/**
	 * @param	stdClass $i
	 * @return	Item
	 */
	private function parseItem( stdClass $i ) {
		$item = new Item();
		$item->setLabel( $i->label );

		foreach ( $i->value as $value ) {
			$item->addValue( $value );
		}

		return $item;
	}

	/**
	 * @param	array $links
	 * @return	LinkList
	 */
	private function parseLinks( array $links ) {
		$linkList = new LinkList();

		foreach ( $links as $l ) {
			$link = new Link();
			$link->setType( $l->link->type );
			$link->setUrl( $l->link->url );
			$linkList->addLink( $link );
		}

		return $linkList;
	}

	/**
	 * @param	stdClass $m
	 * @return	Map
	 */
	private function parseMap( stdClass $m ) {
		$map = new Map();
		$map->setLatitude( (float) $m->latitude );
		$map->setLongitude( (float) $m->longitude );

		return $map;
	}

	/**
	 * @param	stdClass $o
	 * @return	Offer
	 */
	private function parseOffer( stdClass $o ) {
		$offer = new Offer();
		$offer->setCategoryId( $o->categoryid );
		$offer->setId( $o->id );
		$offer->setLinks( $this->parseLinks( $o->links ) );
		$offer->setOfferName( $o->offername );
		$offer->setPrice( $this->parsePrice( $o->price ) );
		$offer->setProductId( $o->productid );
		$offer->setSeller( $this->parseSeller( $o->seller ) );
		$offer->setThumbnail( $this->parseThumbnail( $o->thumbnail ) );

		return $offer;
	}

	/**
	 * @param	stdClass $p
	 * @return	OfferParcel
	 */
	private function parseParcel( stdClass $p ) {
		$parcel = new OfferParcel();
		$parcel->setInterest( $p->interest );
		$parcel->setNumber( $p->number );
		$parcel->setValue( (float) $p->value );

		return $parcel;
	}

	/**
	 * @param	stdClass $p
	 * @return	OfferPrice
	 */
	private function parsePrice( stdClass $p ) {
		$price = new OfferPrice();
		$price->setCurrency( $p->currency->abbreviation );

		if ( isset( $p->parcel ) ) {
			$price->setParcel( $this->parseParcel( $p->parcel ) );
		}

		$price->setValue( (float) $p->value );

		return $price;
	}

	/**
	 * @param	stdClass $p
	 * @return	Product
	 */
	private function parseProduct( stdClass $p ) {
		$product = new Product();
		$product->setCategoryId( $p->categoryid );
		$product->setCurrency( $p->currency->abbreviation );
		$product->setEco( $p->eco );
		$product->setFullDescription( $p->fulldescription );
		$product->setHasMetaSearch( $p->hasmetasearch );
		$product->setId( $p->id );
		$product->setLinks( $this->parseLinks( $p->links ) );

		if ( isset( $p->pricemax ) ) {
			$product->setPriceMax( (float) $p->pricemax );
		}

		if ( isset( $p->pricemin ) ) {
			$product->setPriceMin( (float) $p->pricemin );
		}

		$product->setProductName( $p->productname );

		if ( isset( $p->productshortname ) ) {
			$product->setProductShortName( $p->productshortname );
		}

		$product->setRating( $this->parseRating( $p->rating ) );

		if ( isset( $p->specification ) && $p->specification instanceof stdClass ) {
			$product->setSpecification( $this->parseSpecification( $p->specification ) );
		}

		$product->setThumbnail( $this->parseThumbnail( $p->thumbnail ) );
		$product->setTotalSellers( $p->totalsellers );

		return $product;
	}

	/**
	 * @param	stdClass $r
	 * @return	Rating
	 */
	private function parseRating( stdClass $r ) {
		$rating = new Rating();
		$rating->setUserAverageRating( $this->parseUserAverageRating( $r->useraveragerating ) );

		if ( isset( $r->ebitrating ) ) {
			$rating->setEBitRating( $this->parseEBitRating( $r->ebitrating ) );
		}

		return $rating;
	}

	/**
	 * @param	stdClass $s
	 * @return	Seller
	 */
	private function parseSeller( stdClass $s ) {
		$seller = new Seller();

		if ( isset( $s->addresses ) ) {
			$seller->setAddresses( $this->parseAddresses( $s->addresses ) );
		}

		$seller->setContacts( $this->parseContacts( $s->contacts ) );
		//$seller->setCoupon($coupon)
		$seller->setDigitalPayment( $s->pagamentodigital );
		$seller->setExtra( $s->extra );
		$seller->setId( $s->id );
		$seller->setIsTrustedStore( $s->istrustedstore );
		$seller->setLinks( $this->parseLinks( $s->links ) );
		$seller->setRating( $this->parseRating( $s->rating ) );
		$seller->setSellerName( $s->sellername );
		$seller->setThumbnail( $this->parseThumbnail( $s->thumbnail ) );

		return $seller;
	}

	/**
	 * @param	stdClass $s
	 * @return	Specification
	 */
	private function parseSpecification( stdClass $s ) {
		$specification = new Specification();
		$specification->setLinks( $this->parseLinks( $s->links ) );

		foreach ( $s->item as $item ) {
			$specification->addItem( $this->parseItem( $item->item ) );
		}

		return $specification;
	}

	/**
	 * @param	stdClass $t
	 * @return	Thumbnail
	 */
	private function parseThumbnail( stdClass $t ) {
		$thumbnail = new Thumbnail();
		$thumbnail->setUrl( $t->url );

		if ( isset( $t->height ) ) {
			$thumbnail->setHeight( $t->height );
		}

		if ( isset( $t->width ) ) {
			$thumbnail->setWidth( $t->width );
		}

		return $thumbnail;
	}

	/**
	 * @param	stdClass $u
	 * @return	UserAverageRating
	 */
	private function parseUserAverageRating( stdClass $u ) {
		$userAverageRating = new UserAverageRating();

		if ( isset( $u->links ) ) {
			$userAverageRating->setLinks( $this->parseLinks( $u->links ) );
		}

		$userAverageRating->setNumComments( $u->numcomments );
		$userAverageRating->setRating( (float) $u->rating );

		if ( isset( $u->specification ) ) {
			$userAverageRating->setSpecification( $this->parseSpecification( $u->specification ) );
		}

		return $userAverageRating;
	}
}