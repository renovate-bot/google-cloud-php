<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/geo/type/viewport.proto

namespace Google\Geo\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A latitude-longitude viewport, represented as two diagonally opposite `low`
 * and `high` points. A viewport is considered a closed region, i.e. it includes
 * its boundary. The latitude bounds must range between -90 to 90 degrees
 * inclusive, and the longitude bounds must range between -180 to 180 degrees
 * inclusive. Various cases include:
 *  - If `low` = `high`, the viewport consists of that single point.
 *  - If `low.longitude` > `high.longitude`, the longitude range is inverted
 *    (the viewport crosses the 180 degree longitude line).
 *  - If `low.longitude` = -180 degrees and `high.longitude` = 180 degrees,
 *    the viewport includes all longitudes.
 *  - If `low.longitude` = 180 degrees and `high.longitude` = -180 degrees,
 *    the longitude range is empty.
 *  - If `low.latitude` > `high.latitude`, the latitude range is empty.
 * Both `low` and `high` must be populated, and the represented box cannot be
 * empty (as specified by the definitions above). An empty viewport will result
 * in an error.
 * For example, this viewport fully encloses New York City:
 * {
 *     "low": {
 *         "latitude": 40.477398,
 *         "longitude": -74.259087
 *     },
 *     "high": {
 *         "latitude": 40.91618,
 *         "longitude": -73.70018
 *     }
 * }
 *
 * Generated from protobuf message <code>google.geo.type.Viewport</code>
 */
class Viewport extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The low point of the viewport.
     *
     * Generated from protobuf field <code>.google.type.LatLng low = 1;</code>
     */
    protected $low = null;
    /**
     * Required. The high point of the viewport.
     *
     * Generated from protobuf field <code>.google.type.LatLng high = 2;</code>
     */
    protected $high = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\LatLng $low
     *           Required. The low point of the viewport.
     *     @type \Google\Type\LatLng $high
     *           Required. The high point of the viewport.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Geo\Type\Viewport::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The low point of the viewport.
     *
     * Generated from protobuf field <code>.google.type.LatLng low = 1;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getLow()
    {
        return $this->low;
    }

    public function hasLow()
    {
        return isset($this->low);
    }

    public function clearLow()
    {
        unset($this->low);
    }

    /**
     * Required. The low point of the viewport.
     *
     * Generated from protobuf field <code>.google.type.LatLng low = 1;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setLow($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->low = $var;

        return $this;
    }

    /**
     * Required. The high point of the viewport.
     *
     * Generated from protobuf field <code>.google.type.LatLng high = 2;</code>
     * @return \Google\Type\LatLng|null
     */
    public function getHigh()
    {
        return $this->high;
    }

    public function hasHigh()
    {
        return isset($this->high);
    }

    public function clearHigh()
    {
        unset($this->high);
    }

    /**
     * Required. The high point of the viewport.
     *
     * Generated from protobuf field <code>.google.type.LatLng high = 2;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setHigh($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->high = $var;

        return $this;
    }

}

