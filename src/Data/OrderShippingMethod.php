<?php

declare(strict_types=1);

namespace Webparking\Logic4Client\Data;

class OrderShippingMethod
{
    public function __construct(
        public int $id,
        public ?string $name,
        public ?string $exportCode,
    ) {
    }

    /** @param array<mixed> $data */
    public static function make(array $data): self
    {
        return new self(
            id: $data['Id'],
            name: $data['Name'],
            exportCode: $data['ExportCode'],
        );
    }
}
