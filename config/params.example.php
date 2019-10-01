<?php
$map = [];

$map['5'] = [
    'label' => '第3次月考',
    'fields' => [XM,ZF,PM,YW,YWPM, SX,SXPM, YY,YYPM, WL,WLPM, HX,HXPM,SW,SWPM]
];

$map['4'] = [
    'label' => '第2次月考',
    'fields' => [XM,ZF,PM,YW,YWPM, SX,SXPM, YY,YYPM, WL,WLPM, HX,HXPM,SW,SWPM]
];

$map['3'] = [
    'label' => '第2次开学考试',
    'fields' => [XM,ZF,PM,YW,YWPM, SX,SXPM, YY,YYPM, WL,WLPM, HX,HXPM,SW,SWPM]
];

$map['2'] = [
    'label' => '第1次月考',
    'fields' => [XM,ZF,PM,YW,YWPM, SX,SXPM, YY,YYPM, WL,WLPM, HX,HXPM,SW,SWPM]
];
$map['1'] = [
    'label' => '开学考试',
    'fields' => [XM,ZF,PM,YW,YWPM, SX,SXPM, YY,YYPM, WL,WLPM, HX,HXPM,SW,SWPM]
];


return [
	'title' => '成绩统计',
    'sign' => 'open356.com',
    'statement' => '数据仅供参考',
    'score' => [
        'map' => $map,
        'normalTableId' => '1',
    ],
    'cookieValidationKey' => 'rgttttt89997',
	'baidu_tongji' => '',
];
