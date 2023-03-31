<?php

declare(strict_types=1);

namespace App\Delivery;

use ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface;
use App\Entity\Payment;
use Symfony\Component\HttpFoundation\Response;

final class DefaultAction
{
    public function __construct(
        private PropertyMetadataFactoryInterface $propertyIdentifierMetadataFactory,
        private PropertyMetadataFactoryInterface $propertyMetadataFactory
    ) {
    }

    public function __invoke(): Response
    {
        $propertyMetadata1 = $this->propertyIdentifierMetadataFactory->create(
            Payment::class,
            'id',
            ['random_for_cache_recomputing' => rand()]
        );
        $propertyMetadata2 = $this->propertyMetadataFactory->create(
            Payment::class,
            'id',
            ['random_for_cache_recomputing' => rand()]
        );

//        dump($propertyMetadata1);
//        dump($propertyMetadata2);
        dump($propertyMetadata1->getTypes());
        dump($propertyMetadata2->getTypes());

        return new Response('Hello world.');
    }
}
