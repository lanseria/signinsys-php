# mm 报名管理系统

报名管理系统是一个用于大学、企业中、小型活动报名统计的 WEB 项目。

## 简介

本项目是[大学生社团分布式管理系统](#)的子项目,用于其新进成员的报名,以及数据的统计,由于是分布式系统的原因,所以其报名信息都可以导入到系统的数据库内,方便其他系统利用.

1.项目后端的搭建 :

- 使用`php`的`thinkphp3.2`框架完成网站后端搭建; 
- 使用`mysql`完成数据存储,通过thinkphp的model模块完成对mysql数据的构建;使用自带模板引擎完成页面创建渲染;

2.项目前端的搭建 :

- 使用`jQuery`和`Bootsrap`完成网站前端JS脚本和样式处理;
- 使用`validate.js`完成对账号登录注册的判断;
- 前后端的数据请求交互通过`Ajax`完成;

3.本地环境的搭建 : 

- 开发环境在windows10下完成
- 运行在ubuntu 16下
- 并通过nginx作为服务器,mysql作为数据库

## Design 设计

项目主页如下如所示(点击可以查看)

[![项目主页](https://raw.github.com/Lanseria/mm/master/docs/images/index.png)](http://mm.limonplayer.cn)

[![项目部分截图](https://raw.github.com/Lanseria/mm/master/docs/images/detail1.png)](http://mm.limonplayer.cn)

[![项目部分截图](https://raw.github.com/Lanseria/mm/master/docs/images/detail2.png)](http://mm.limonplayer.cn)

### 详细功能

本项目主要有活动`activity`的创建与`excel`导出功能

- 其次有对活动时间的控制,可以对活动进行修改
- 富文本的编辑与操作

###项目结构

```
├── index.php         项目入口文件
├── Application       THINKphp后端MVC文件目录
│   ├── Common        公共函数目录
│   ├── Home          Home目录
│   ├── Manager       后台目录
│   ├── Manager_Detail后台beta目录
│   ├── README.md     框架README文件
│   └── index         
│
├── db                供参考的数据库数据
├── ThinkPHP          框架系统目录（可以部署在非web目录下面）
├── public            静态文件目录
│   ├── assets        后台样式
│   ├── css           样式目录
│   ├── fonts         字体目录
│   ├── images        静态图片目录
│   ├── js            JS脚本目录
│   └favicon.png      favicon
├── README.md
└── package.json
```

## 商业友好的开源协议

Licence是著名的非盈利开源组织Apache采用的协议。该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，同样允许代码修改，再作为开源或商业软件发布。

