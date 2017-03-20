<?php


$dictionary=array(

'DEVICES_MODULE_TITLE'=>'Simple Devices',

'DEVICES_LINKED_WARNING'=>'Please note that when linking to existing object, it will be assigned to the new class.',

'DEVICES_RELAY'=>'Relay/Switch',
'DEVICES_DIMMER'=>'Dimmer',
'DEVICES_MOTION'=>'Motion sensor',
'DEVICES_BUTTON'=>'Button',
'DEVICES_SWITCH'=>'Switch',
'DEVICES_OPENCLOSE'=>'Open/Close sensor',
'DEVICES_TEMP_SENSOR'=>'Temperature sensor',
'DEVICES_HUM_SENSOR'=>'Humidity sensor',
'DEVICES_STATE_SENSOR'=>'State sensor',
'DEVICES_PERCENTAGE_SENSOR'=>'Percentage value sensor',
'DEVICES_PRESSURE_SENSOR'=>'Atmospheric pressure sensor',
'DEVICES_POWER_SENSOR'=>'Power sensor',
'DEVICES_VOLTAGE_SENSOR'=>'Voltage sensor',
'DEVICES_CURRENT_SENSOR'=>'Current sensor',

// Measure
'M_VOLTAGE'=>'V',
'M_CURRENT'=>'I',
'M_PRESSURE'=>'Tor',
'M_WATT'=>'W',

//----
'DEVICES_LINKS'=>'Linked devices',

'DEVICES_STATUS'=>'Status',

'DEVICES_LOGIC_ACTION'=>'Action',

'DEVICES_CURRENT_VALUE'=>'Current value',
'DEVICES_CURRENT_HUMIDITY'=>'Humidity',
'DEVICES_CURRENT_TEMPERATURE'=>'Temperature',

'DEVICES_MIN_VALUE'=>'Minimum value',
'DEVICES_MAX_VALUE'=>'Maximum value',
'DEVICES_NOTIFY'=>'Notify when value out of range',
'DEVICES_NORMAL_VALUE'=>'Value within range',
'DEVICES_NOTIFY_OUTOFRANGE'=>'Value is out of normal range',
'DEVICES_NOTIFY_BACKTONORMAL'=>'Value is back to normal',

'DEVICES_IS_ON'=>'is ON',
'DEVICES_IS_CLOSED'=>'is Closed',

'DEVICES_MOTION_DETECTED'=>'Detected',
'DEVICES_MOTION_IGNORE_MODE_CHANGE'=>'Ignore motion events when "Nobody home" mode active',

'DEVICES_PRESS'=>'Press',
'DEVICES_TURN_ON'=>'Turn On',
'DEVICES_TURN_OFF'=>'Turn Off',

'DEVICES_GROUP_ECO'=>'Turn it off in ECO mode',
'DEVICES_GROUP_SUNRISE'=>'Turn it off with Sunrise',
'DEVICES_IS_ACTIVITY'=>'Status change means activity in the room',

'DEVICES_ADD_MENU'=>'Add device to Menu',
'DEVICES_ADD_SCENE'=>'Add device to Scene',

'DEVICES_LINKS_NOT_ADDED'=>'No linked devices set',
'DEVICES_LINKS_AVAILABLE'=>'Available links',
'DEVICES_LINKS_COMMENT'=>'Comment (optional)',
'DEVICES_LINKS_LINKED_DEVICE'=>'Linked device',
'DEVICES_LINKS_ADDED'=>'Links added',

'DEVICES_LINK_ACTION_TYPE'=>'Action type',
'DEVICES_LINK_TYPE_TURN_ON'=>'Turn On',
'DEVICES_LINK_TYPE_TURN_OFF'=>'Turn Off',
'DEVICES_LINK_TYPE_SWITCH'=>'Switch',

'DEVICES_LINK_SWITCH_IT'=>'Switch it',
'DEVICES_LINK_SWITCH_IT_DESCRIPTION'=>'Control another devices when action triggered',
'DEVICES_LINK_SWITCH_IT_PARAM_ACTION_DELAY'=>'Delay (seconds)',

'DEVICES_LINK_SENSOR_SWITCH'=>'Sensor control',
'DEVICES_LINK_SENSOR_SWITCH_DESCRIPTION'=>'Control another devices based on sensor\'s value',
'DEVICES_LINK_SENSOR_SWITCH_PARAM_CONDITION'=>'Condition type',
'DEVICES_LINK_SENSOR_SWITCH_PARAM_CONDITION_ABOVE'=>'Above',
'DEVICES_LINK_SENSOR_SWITCH_PARAM_CONDITION_BELOW'=>'Below',
'DEVICES_LINK_SENSOR_SWITCH_PARAM_VALUE'=>'Value',


'DEVICES_UPDATE_CLASSSES'=>'Update classes',
'DEVICES_ADD_OBJECT_AUTOMATICALLY'=>'Add automatically'

/* end module names */


);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}