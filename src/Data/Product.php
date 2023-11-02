<?php

declare(strict_types=1);

namespace Webparking\Logic4Client\Data;

use Carbon\Carbon;

class Product
{
    /**
     * @param array<FreeValue>             $freeValues
     * @param array<Translation>           $descriptions
     * @param array<ProductShiftPrice>     $shiftPrices
     * @param array<ProductGroup>          $productGroups
     * @param array<ProductExtraBarcode>   $barcodeExtraList
     * @param array<ProductStockWarehouse> $wareHouses
     */
    public function __construct(
        public int $productId,
        public ?int $subUnitParentId,
        public ?string $productCode,
        public ?string $productName1,
        public ?string $productName2,
        public ?string $productInfo,
        public int $statusId,
        public ?string $statusname,
        public int $brandId,
        public ?string $brandname,
        public ?string $imagename1,
        public ?string $imageUrl1,
        public ?string $imagename2,
        public ?string $imageUrl2,
        public ?string $imagename3,
        public ?string $imageUrl3,
        public ?string $unit,
        public int $unitId,
        public int $minSaleAmount,
        public ?int $minSaleAmountWebshop,
        public ?int $minSaleBuyAmountDropShipment,
        public ?int $saleCountIncrement,
        public ?int $saleCountIncrementWebshop,
        public ?int $saleCountIncrementDropShipment,
        public ?int $minBuyAmount,
        public float $vatPercent,
        public ?int $vatCodeId,
        public float $sellPriceGross,
        public float $weight,
        public float $volume,
        public ?ProductOffer $offer,
        public ?float $sellPriceAdvice,
        public float $buyPrice,
        public int $productGroupId1,
        public ?int $buyCountIncrement,
        public ?float $sellPriceLowestForWebshop,
        public bool $excludePriceFromPricelistCalculations,
        public ?float $additionalBuyPriceAmount,
        public ?float $additionalBuyPricePercentage,
        public ?bool $isComposedProduct,
        public bool $isAssemblyProduct,
        public bool $composedProductSetChildSellPricesToZero,
        public ?bool $composedProductSetSellPriceToZero,
        public float $freeStock,
        public ?int $externalStockActiveSupplier,
        public ?int $creditorDiscountGroupId,
        public ?Carbon $dateTimeLastChanged,
        public ?Carbon $dateTimeAdded,
        public ?string $barCode1,
        public ?array $freeValues,
        public ?int $sorting,
        public ?Carbon $nextDelivery,
        public ?array $descriptions,
        public ?array $shiftPrices,
        public ?array $productGroups,
        public ?string $barcode2,
        public ?array $barcodeExtraList,
        public ?string $systemBarcode,
        public int $productGroup1ProductGroupTypeId,
        public ?array $wareHouses,
        public ?int $minimalStock,
        public int $PCSinInsidePackage,
        public int $PCSinOutsidePackage,
        public ?ProductType $productType1,
        public ?ProductType $productType2,
        public ?ProductType $productType3,
        public ?ProductType $productType4,
        public ?ProductType $productType5,
        public ?float $standardAmount,
        public ?string $vendorCode,
        public ?int $productTemplateId,
        public ?string $productTemplateName,
    ) {
    }

    /** @param array<mixed> $data */
    public static function make(array $data): self
    {
        return new self(
            productId: $data['ProductId'] ?? 0,
            subUnitParentId: $data['SubUnit_ParentId'] ?? null,
            productCode: $data['ProductCode'] ?? null,
            productName1: $data['ProductName1'] ?? null,
            productName2: $data['ProductName2'] ?? null,
            productInfo: $data['ProductInfo'] ?? null,
            statusId: $data['StatusId'] ?? 0,
            statusname: $data['Statusname'] ?? null,
            brandId: $data['BrandId'] ?? 0,
            brandname: $data['Brandname'] ?? null,
            imagename1: $data['Imagename1'] ?? null,
            imageUrl1: $data['ImageUrl1'] ?? null,
            imagename2: $data['Imagename2'] ?? null,
            imageUrl2: $data['ImageUrl2'] ?? null,
            imagename3: $data['Imagename3'] ?? null,
            imageUrl3: $data['ImageUrl3'] ?? null,
            unit: $data['Unit'] ?? null,
            unitId: $data['UnitId'] ?? 0,
            minSaleAmount: $data['MinSaleAmount'] ?? 0,
            minSaleAmountWebshop: $data['MinSaleAmountWebshop'] ?? null,
            minSaleBuyAmountDropShipment: $data['MinSaleBuyAmountDropShipment'] ?? null,
            saleCountIncrement: $data['SaleCountIncrement'] ?? null,
            saleCountIncrementWebshop: $data['SaleCountIncrementWebshop'] ?? null,
            saleCountIncrementDropShipment: $data['SaleCountIncrementDropShipment'] ?? null,
            minBuyAmount: $data['MinBuyAmount'] ?? null,
            vatPercent: $data['VatPercent'] ?? 0.0,
            vatCodeId: $data['VatCodeId'] ?? null,
            sellPriceGross: $data['SellPriceGross'] ?? 0.0,
            weight: $data['Weight'] ?? 0.0,
            volume: $data['Volume'] ?? 0.0,
            offer: isset($data['Offer']) ? ProductOffer::make($data['Offer']) : null,
            sellPriceAdvice: $data['SellPriceAdvice'] ?? null,
            buyPrice: $data['BuyPrice'] ?? 0.0,
            productGroupId1: $data['ProductGroupId1'] ?? 0,
            buyCountIncrement: $data['BuyCountIncrement'] ?? null,
            sellPriceLowestForWebshop: $data['SellPriceLowestForWebshop'] ?? null,
            excludePriceFromPricelistCalculations: $data['ExcludePriceFromPricelistCalculations'] ?? false,
            additionalBuyPriceAmount: $data['AdditionalBuyPriceAmount'] ?? null,
            additionalBuyPricePercentage: $data['AdditionalBuyPricePercentage'] ?? null,
            isComposedProduct: $data['IsComposedProduct'] ?? null,
            isAssemblyProduct: $data['IsAssemblyProduct'] ?? false,
            composedProductSetChildSellPricesToZero: $data['ComposedProductSetChildSellPricesToZero'] ?? false,
            composedProductSetSellPriceToZero: $data['ComposedProductSetSellPriceToZero'] ?? null,
            freeStock: $data['FreeStock'] ?? 0.0,
            externalStockActiveSupplier: $data['ExternalStockActiveSupplier'] ?? null,
            creditorDiscountGroupId: $data['CreditorDiscountGroupId'] ?? null,
            dateTimeLastChanged: isset($data['DateTimeLastChanged']) ? Carbon::parse($data['DateTimeLastChanged']) : null,
            dateTimeAdded: isset($data['DateTimeAdded']) ? Carbon::parse($data['DateTimeAdded']) : null,
            barCode1: $data['BarCode1'] ?? null,
            freeValues: array_map(static fn (array $item) => FreeValue::make($item), $data['FreeValues'] ?? []),
            sorting: $data['Sorting'] ?? null,
            nextDelivery: isset($data['NextDelivery']) ? Carbon::parse($data['NextDelivery']) : null,
            descriptions: array_map(static fn (array $item) => Translation::make($item), $data['Descriptions'] ?? []),
            shiftPrices: array_map(static fn (array $item) => ProductShiftPrice::make($item), $data['ShiftPrices'] ?? []),
            productGroups: array_map(static fn (array $item) => ProductGroup::make($item), $data['ProductGroups'] ?? []),
            barcode2: $data['Barcode2'] ?? null,
            barcodeExtraList: array_map(static fn (array $item) => ProductExtraBarcode::make($item), $data['BarcodeExtraList'] ?? []),
            systemBarcode: $data['SystemBarcode'] ?? null,
            productGroup1ProductGroupTypeId: $data['ProductGroup1ProductGroupTypeId'] ?? 0,
            wareHouses: array_map(static fn (array $item) => ProductStockWarehouse::make($item), $data['WareHouses'] ?? []),
            minimalStock: $data['MinimalStock'] ?? null,
            PCSinInsidePackage: $data['PCSinInsidePackage'] ?? 0,
            PCSinOutsidePackage: $data['PCSinOutsidePackage'] ?? 0,
            productType1: isset($data['ProductType1']) ? ProductType::make($data['ProductType1']) : null,
            productType2: isset($data['ProductType2']) ? ProductType::make($data['ProductType2']) : null,
            productType3: isset($data['ProductType3']) ? ProductType::make($data['ProductType3']) : null,
            productType4: isset($data['ProductType4']) ? ProductType::make($data['ProductType4']) : null,
            productType5: isset($data['ProductType5']) ? ProductType::make($data['ProductType5']) : null,
            standardAmount: $data['StandardAmount'] ?? null,
            vendorCode: $data['VendorCode'] ?? null,
            productTemplateId: $data['ProductTemplateId'] ?? null,
            productTemplateName: $data['ProductTemplateName'] ?? null,
        );
    }
}
