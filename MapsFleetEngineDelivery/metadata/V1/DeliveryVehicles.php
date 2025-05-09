<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/delivery_vehicles.proto

namespace GPBMetadata\Google\Maps\Fleetengine\Delivery\V1;

class DeliveryVehicles
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Type\Latlng::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/maps/fleetengine/delivery/v1/delivery_vehicles.protomaps.fleetengine.delivery.v1google/api/resource.proto0google/maps/fleetengine/delivery/v1/common.protogoogle/protobuf/duration.protogoogle/protobuf/wrappers.protogoogle/type/latlng.proto"�
DeliveryVehicle
name (	L
last_location (25.maps.fleetengine.delivery.v1.DeliveryVehicleLocationR
past_locations (25.maps.fleetengine.delivery.v1.DeliveryVehicleLocationB�AX
navigation_status (2=.maps.fleetengine.delivery.v1.DeliveryVehicleNavigationStatus
current_route_segment (<
current_route_segment_end_point (2.google.type.LatLng>
remaining_distance_meters (2.google.protobuf.Int32Value5
remaining_duration (2.google.protobuf.Duration_
"remaining_vehicle_journey_segments (23.maps.fleetengine.delivery.v1.VehicleJourneySegmentJ

attributes	 (26.maps.fleetengine.delivery.v1.DeliveryVehicleAttributeO
type
 (2A.maps.fleetengine.delivery.v1.DeliveryVehicle.DeliveryVehicleType"t
DeliveryVehicleType%
!DELIVERY_VEHICLE_TYPE_UNSPECIFIED 
AUTO
TWO_WHEELER
BICYCLE

PEDESTRIAN:`�A]
*fleetengine.googleapis.com/DeliveryVehicle/providers/{provider}/deliveryVehicles/{vehicle}"2
LocationInfo"
point (2.google.type.LatLng"�
VehicleJourneySegment7
stop (2).maps.fleetengine.delivery.v1.VehicleStopA
driving_distance_meters (2.google.protobuf.Int32ValueB�A8
driving_duration (2.google.protobuf.DurationB�A&
path (2.google.type.LatLngB�A"�
VehicleStopI
planned_location (2*.maps.fleetengine.delivery.v1.LocationInfoB�AA
tasks (22.maps.fleetengine.delivery.v1.VehicleStop.TaskInfo>
state (2/.maps.fleetengine.delivery.v1.VehicleStop.State�
TaskInfo
task_id (	5
task_duration (2.google.protobuf.DurationB�AI
target_time_window (2(.maps.fleetengine.delivery.v1.TimeWindowB�A"A
State
STATE_UNSPECIFIED 
NEW
ENROUTE
ARRIVEDB�
\'com.google.maps.fleetengine.delivery.v1BDeliveryVehiclesPZIcloud.google.com/go/maps/fleetengine/delivery/apiv1/deliverypb;deliverypb�CFED�#Google.Maps.FleetEngine.Delivery.V1�#Google\\Maps\\FleetEngine\\Delivery\\V1�\'Google::Maps::FleetEngine::Delivery::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

