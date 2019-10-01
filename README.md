QwQuery
============================


QwQuery2.0 对Z大的1.0版本进行了重构


Features
------------
- Material Design
- 根据 `学生姓名` `学校` `班级` 查询
- 每个科目成绩排序，`正序` `倒序`
- 表格
    - 固定表头
    - 全屏显示
    - 手动调整字体大小
    - 隐藏指定字段
    - 设定每页显示项目数量
- 快速查看每组数据的平均分
- 直接保存为 `.xls` 电子表格文件
- 直接打印
- 显示考生数
- 趋势，统计图
    - 历史成绩
    - 总分趋势
    - 市平均分趋势
- 控制台功能
    - 构建排名（录取人数风格）
    - [统一原本不同的学校名和班级名（姓名作为桥梁）](./docs/两堆数据统一原本不同的学校名和班级名的方法.md)
- 适配手机端 响应式页面

Start
------------

```sh
$ composer install
$ php -r "copy('config/db.example.php', 'config/db.php');copy('config/params.example.php', 'config/params.php');"
```

Using
------------
- [yiisoft/yii2](https://github.com/yiisoft/yii2)
- [antvis/g2](https://github.com/antvis/g2)

