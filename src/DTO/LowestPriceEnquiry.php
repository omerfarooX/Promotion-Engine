<?php 

namespace App\DTO;

class LowestPriceEnquiry implements PromotionEnquiryInterface
{
    private ?int $productId;

    private ?int $quantity;

    private ?string $requestLocation;

    private ?string $voucherCode;

    private ?string $requestDate;

    private ?int $price;

    private ?int $discountedPrice;

    private ?int $promotionId;

    private ?string $promotionName;
    

    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setRequestLocation(?string $requestLocation): void
    {
        $this->requestLocation = $requestLocation;
    }

    public function getRequestLocation(): ?string
    {
        return $this->requestLocation;
    }

    public function setVoucherCode(?string $voucherCode): void
    {
        $this->voucherCode = $voucherCode;
    }

    public function getVoucherCode(): ?string
    {
        return $this->voucherCode;
    }

    public function setRequestDate(?string $requestDate): void
    {
        $this->requestDate = $requestDate;
    }

    public function getRequestDate(): ?string
    {
        return $this->requestDate;
    }

    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setDiscountedPrice(?int $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }

    public function getDiscountedPrice(): ?int
    {
        return $this->discountedPrice;
    }

    public function setPromotionId(?int $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    public function setPromotionName(?string $promotionName): void
    {
        $this->promotionName = $promotionName;
    }

    public function getPromotionName(): ?string
    {
        return $this->promotionName;
    }

}