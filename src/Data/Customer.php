<?php

declare(strict_types=1);

namespace Webparking\Logic4Client\Data;

class Customer
{
    /** @param array<integer> $pricelistIds */
    public function __construct(
        public int $id,
        public ?string $loginName,
        public ?int $relationGroupId,
        public ?int $relationGroup2Id,
        public bool $hide,
        public ?string $freeValue1,
        public ?string $freeValue2,
        public ?string $freeValue3,
        public ?VatCode $vatCode,
        public ?Representative $representative,
        public ?RelationType $type,
        public ?Gender $gender,
        public ?RelationStatus $status,
        public ?string $isoCode,
        public ?string $countryCode,
        public int $countryId,
        public ?string $companyName,
        public ?string $firstName,
        public ?string $lastName,
        public ?string $emailAddress,
        public ?int $paymentMethodId,
        public ?array $pricelistIds,
        public ?string $telephoneNumber,
        public ?string $mobileNumber,
        public ?string $faxnumber,
        public ?string $chamberOfCommerceCode,
        public ?string $website,
        public ?float $discount,
        public ?int $standardReportIdForPickingList,
        public ?int $standardReportIdForSalesOrderDelivery,
        public ?string $city,
        public ?string $zipcode,
        public ?string $street,
        public ?string $houseNumber,
        public ?string $houseNumberAddition,
        public ?string $vatNumber,
        public bool $dontPrintPaperInvoiceForDebtor,
        public bool $receiveInvoiceElectronically,
        public ?int $electronicInvoiceAttachmentType,
        public ?int $standardInvoiceLayoutReportId,
        public ?string $preposition,
        public ?float $creditLimit,
        public ?int $shippingMethodId,
        public ?int $globalisationId,
        public ?int $standardPackagingSlipLayoutReportId,
    ) {
    }

    /** @param array<mixed> $data */
    public static function make(array $data): self
    {
        return new self(
            id: $data['Id'] ?? 0,
            loginName: $data['LoginName'] ?? null,
            relationGroupId: $data['RelationGroupId'] ?? null,
            relationGroup2Id: $data['RelationGroup2Id'] ?? null,
            hide: $data['Hide'] ?? false,
            freeValue1: $data['FreeValue1'] ?? null,
            freeValue2: $data['FreeValue2'] ?? null,
            freeValue3: $data['FreeValue3'] ?? null,
            vatCode: isset($data['VatCode']) ? VatCode::make($data['VatCode']) : null,
            representative: isset($data['Representative']) ? Representative::make($data['Representative']) : null,
            type: isset($data['Type']) ? RelationType::make($data['Type']) : null,
            gender: isset($data['Gender']) ? Gender::make($data['Gender']) : null,
            status: isset($data['Status']) ? RelationStatus::make($data['Status']) : null,
            isoCode: $data['IsoCode'] ?? null,
            countryCode: $data['CountryCode'] ?? null,
            countryId: $data['CountryId'] ?? 0,
            companyName: $data['CompanyName'] ?? null,
            firstName: $data['FirstName'] ?? null,
            lastName: $data['LastName'] ?? null,
            emailAddress: $data['EmailAddress'] ?? null,
            paymentMethodId: $data['PaymentMethodId'] ?? null,
            pricelistIds: $data['PricelistIds'] ?? null,
            telephoneNumber: $data['TelephoneNumber'] ?? null,
            mobileNumber: $data['MobileNumber'] ?? null,
            faxnumber: $data['Faxnumber'] ?? null,
            chamberOfCommerceCode: $data['ChamberOfCommerceCode'] ?? null,
            website: $data['Website'] ?? null,
            discount: $data['Discount'] ?? null,
            standardReportIdForPickingList: $data['StandardReportIdForPickingList'] ?? null,
            standardReportIdForSalesOrderDelivery: $data['StandardReportIdForSalesOrderDelivery'] ?? null,
            city: $data['City'] ?? null,
            zipcode: $data['Zipcode'] ?? null,
            street: $data['Street'] ?? null,
            houseNumber: $data['HouseNumber'] ?? null,
            houseNumberAddition: $data['HouseNumberAddition'] ?? null,
            vatNumber: $data['VatNumber'] ?? null,
            dontPrintPaperInvoiceForDebtor: $data['DontPrintPaperInvoiceForDebtor'] ?? false,
            receiveInvoiceElectronically: $data['ReceiveInvoiceElectronically'] ?? false,
            electronicInvoiceAttachmentType: $data['ElectronicInvoiceAttachmentType'] ?? null,
            standardInvoiceLayoutReportId: $data['StandardInvoiceLayoutReportId'] ?? null,
            preposition: $data['Preposition'] ?? null,
            creditLimit: $data['CreditLimit'] ?? null,
            shippingMethodId: $data['ShippingMethodId'] ?? null,
            globalisationId: $data['GlobalisationId'] ?? null,
            standardPackagingSlipLayoutReportId: $data['StandardPackagingSlipLayoutReportId'] ?? null,
        );
    }
}
