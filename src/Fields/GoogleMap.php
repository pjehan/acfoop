<?php


namespace Pjehan\Acfoop\Fields;



use Pjehan\Acfoop\Fields\Attributes\Required;
use Pjehan\Acfoop\Fields\Attributes\ReturnFormat;

class GoogleMap extends Field
{
    use Required;

	private float $centerLat = 0;
	private float $centerLng = 0;
	private int $zoom = 14;
	private string $height = '400px';

    public function getType(): string
    {
        return 'google_map';
    }

	/**
	 * @return float
	 */
	public function getCenterLat(): float
	{
		return $this->centerLat;
	}

	/**
	 * @param float $centerLat
	 * @return GoogleMap
	 */
	public function setCenterLat(float $centerLat): GoogleMap
	{
		$this->centerLat = $centerLat;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getCenterLng(): float
	{
		return $this->centerLng;
	}

	/**
	 * @param float $centerLng
	 * @return GoogleMap
	 */
	public function setCenterLng(float $centerLng): GoogleMap
	{
		$this->centerLng = $centerLng;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getZoom(): int
	{
		return $this->zoom;
	}

	/**
	 * @param int $zoom
	 * @return GoogleMap
	 */
	public function setZoom(int $zoom): GoogleMap
	{
		$this->zoom = $zoom;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHeight(): string
	{
		return $this->height;
	}

	/**
	 * @param string $height
	 * @return GoogleMap
	 */
	public function setHeight(string $height): GoogleMap
	{
		$this->height = $height;
		return $this;
	}

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->requiredToArray(),
			[
				'center_lat' => $this->getCenterLat(),
				'center_lng' => $this->getCenterLng(),
				'zoom' => $this->getZoom(),
				'height' => $this->getHeight(),
			]
		);
    }
}
