<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '使用文档';
?>
<div class="site-about">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><?= Html::encode($this->title) ?></h2>
        </div>
        <div class="card-block">
            
            <br/>
            <h5>程序信息</h5>
            <ul>
                <li>版本 2.0</li>
                <li>本项目基于Z神开源的查询框架重构</li>
                <li>如有任何使用问题请发送邮件至open356@open356.com</li>
            </ul>
                <br/>
            <h5>温馨提示</h5>    
            <ul>
                <li>表格在线转SQL工具：<a href="https://tableconvert.com/">tableconvert</a></li>
                <li>SQL示例：
                INSERT INTO `score_X` (`准考证号`, `id`, `clas`, `name`, `学生属性`, `yw`, `ywrank`, `语文校次进退步`, `语文班次`, `语文班次进退步`, `sx`, `sxrank`, `数学校次进退步`, `数学班次`, `数学班次进退步`, `yy`, `yyrank`, `英语校次进退步`, `英语班次`, `英语班次进退步`, `wl`, `wlrank`, `物理校次进退步`, `物理班次`, `物理班次进退步`, `hx`, `hxrank`, `化学校次进退步`, `化学班次`, `化学班次进退步`, `sw`, `swrank`, `生物校次进退步`, `生物班次`, `生物班次进退步`, `overall`, `ranking`, `总分校次进退步`, `crank`, `总分班次进退步`) VALUES
    (内容); </li>
				<li>注意手动添加map，规范如下：$map['编号X（对应数据库score_X中的X）'] = [
    'label' => '考试名（如第26次模拟考试）',
    'fields' => [XM,ZF,PM,YW,YWPM, SX,SXPM, YY,YYPM, WL,WLPM,HX,HXPM,SW,SWPM]
];</li>
              
            </ul>
            
              <br/>
              <h5>开发计划</h5>
            <ul>
                <li>计划1:基于Laravel重写整个教务系统</li>
                <li>计划2:通过机器学习，让AI算法预测下一次考试成绩和大学录取率</li>
                <li>计划3:错题频次统计与智能化建议</li>
                <li>计划4:更加精致美观的界面</li>
            </ul>
            <br/>
     
            <br/>
            <p><?= Yii::$app->params['sign'] ?></p>
            <p><?= Yii::$app->params['statement'] ?></p>
        </div>
    </div>
</div>
