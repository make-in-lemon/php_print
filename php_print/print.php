<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   


    <style type="text/css">

        .my_spec_list{
            line-height: 18px;
            font-size: 18px;

        };
        .my_goods_serial {
            font-size: 24px;
            font-weight: bold;
        }

        body { color: #666; background-color: #F9F9F9;}
        html,body{ height:100%;}
        h2 { font: 24px/40px "microsoft yahei"; color: #27A9E3;}
        h1, h2, h3, h4, h5, h6 { font-family:  "microsoft yahei"; font-weight: normal;}
        h1 { font-size: 32px;}
        h2 { font-size: 25px;}
        h3 { font-size: 22px;}
        h5 { font-size: 15px;}
        h6 { font-size: 13px;}
        .lighter { font-weight: lighter;}
        .bolder { font-weight: bolder;}
        h1.smaller { font-size: 31px;}
        h2.smaller { font-size: 24px;}
        h3.smaller { font-size: 21px;}
        h4.smaller { font-size: 17px;}
        h5.smaller { font-size: 14px;}
        h6.smaller { font-size: 12px;}
        h1.bigger { font-size: 33px;}
        h2.bigger { font-size: 26px;}
        h3.bigger { font-size: 23px;}
        h4.bigger { font-size: 19px;}
        h5.bigger { font-size: 16px;}
        h6.bigger { font-size: 14px;}
        h1.block, h2.block, h3.block, h4.block, h5.block, h6.block { margin-bottom: 16px;}
        i { font-size: 1.2em;}
        a:focus, a:active { text-decoration: none;}
        a { color: #0579C6; text-decoration: none; -webkit-transition-property:color;  -webkit-transition-duration:0.3s; -webkit-transition-timing-function: ease;}
        a:hover { text-decoration: underline; color: #F60;}
        .hidden { display: none;}
        .center { text-align: center;}
        .position-relative { position: relative;}
        .position-absolute { position: absolute;}
        .dark { color: #333333 !important;}
        .white { color: #FFFFFF !important;}
        .red { color: #DD5A43 !important;}
        .light-red { color: #FF7777 !important;}
        .blue { color: #27A9E3 !important;}
        .light-blue { color: #93CBF9 !important;}
        .green { color: #69AA46 !important;}
        .light-green { color: #B6E07F !important;}
        .orange { color: #FF892A !important;}
        .purple { color: #A069C3 !important;}
        .pink { color: #C6699F !important;}
        .pink2 { color: #D6487E !important;}
        .brown { color: #A52A2A !important;}
        .grey { color: #777777 !important;}

        /* ---------------------------------------- */
        /* 常用宽度、高度、边距、边框属性				*/
        /* ---------------------------------------- */


        /* 发货单打印页面 */
        .print-layout { font-size:12px; background:#FAFAFA; border: solid 1px #CCC; position:relative; width:210mm; height:297mm; padding:5mm 50mm 5mm 5mm ; margin: 20px auto; box-shadow: 2px 2px 2px rgba(204,204,204,0.5); }
        .print-layout .print-btn {background:#FFF; border:  solid 1px #ccc;  position: absolute; z-index: 3; top:10mm; right:10mm; line-height:32px; padding:5px 10px; border-radius: 5px; box-shadow: 2px 2px 0 rgba(153,153,153,0.2); cursor: pointer;}
        .print-layout .print-btn:hover {  background: #555; box-shadow: none; border-color: #555;}
        .print-layout .print-btn i { background: url(../images/seller/ncsc_bg_img.png)scroll no-repeat 0 -460px; vertical-align: middle; display: inline-block; width: 32px; height: 32px;}
        .print-layout .print-btn a { font-family:"microsoft yahei"; font-size: 20px;padding: 0 0 0 10px; color: #555; font-weight:600; display:inline-block; vertical-align: middle;}
        .print-layout .print-btn:hover a, .print-layout .print-btn a:hover { color: #FFF;  text-decoration:none;}
        .print-layout .a5-size, .print-layout .a4-size { background:#FFF; border: dashed 1px #ccc; width: 210mm; position:absolute; top:5mm; left:5mm; padding:1px;}
        .print-layout .a5-size { height:148mm;  z-index:2;}
        .print-layout .a4-size { height:297mm; z-index:1;}
        .print-layout .a5-tip, .print-layout .a4-tip{ color:#333; width:36mm; position: absolute; z-index:2; right:8mm;}
        .print-layout .a5-tip { top:50mm;}
        .print-layout .a4-tip { }
        .print-layout dl dt h1 { font-family:"Arial Black", Gadget, sans-serif; font-size:72px; line-height:72px;}
        .print-layout dl dt em { font-family: Arial; font-size:11px; line-height:20px; padding: 0 8px; height:20px; border-radius:10px; -webkit-text-size-adjust:none;}
        .print-layout .a5-tip dd, .print-layout .a4-tip dd { line-height:24px;}
        .print-layout .print-page { width: 210mm; height:297mm; position:absolute; z-index:3; top:5mm; left:5mm; margin:1px;  overflow:auto;}
        .orderprint { background: #FFF; width: 190mm; height:100%; margin-bottom:20px;padding:10mm 10mm 8mm 10mm; color:#000000; position:relative;}
        .orderprint .top { font-family:"microsoft yahei"; line-height:60px; width:190mm; height:60px; overflow:hidden; font-size:24px;}
        .orderprint .top .logo { width:200px; height:60px; float:left;}
        .orderprint .top .logo-title { text-align: left; width:450px; height: 60px; float:left; margin-left:10px; overflow:hidden;}
        .orderprint .top .full-title { width:100%; text-align:center;}
        .orderprint .explain { color: #555; line-height: 20px; width:100%;}
        .orderprint .seal {  position: absolute; top:120px; right:50px; }
        .orderprint .page { line-height:18px; color:#999; position: absolute; bottom:0px; left:50%; margin-left:-30px;}
        .orderprint table { font-family:Arial, Helvetica, sans-serif;  font-size:14px; line-height:18px; width:80%; border-collapse: collapse;}
        .buyer-info { margin: 15px 0;}
        .order-info thead th { font-weight:normal;background: #E7E7E7; text-align:center; border-bottom: solid 2px #000; border-top: solid 2px #000; padding:2px 0;}
        .order-info thead tr td {}
        .order-info tbody tr th {  background: #F7F7F7; text-align:left; padding:8px 0; text-align:center; font-weight:600;  border-bottom: solid 2px #000; border-top: solid 2px #000;}
        .order-info tbody tr td { padding: 8px 0; text-align: center;}
        .order-info tfoot tr th { border-bottom: solid 2px #000; padding: 6px 0;text-align:left;font-weight:normal;}
        .order-info tfoot tr th span { line-height:20px; white-space:nowrap; display:inline-block; width: 24%; height: 20px; padding:0; margin:0; border:0; overflow:hidden; text-overflow:ellipsis; }
        .orderprint th{ font-variant:normal; text-align:left}
        .w200 {
            width: 200px !important;
        }
        .tl {
            text-align: left !important;
        }
        .w70 {
            width: 70px !important;
        }
        .w40 {
            width: 40px !important;
        }

        .waybill-img-thumb {
            background-color: #fff;
            border: 1px solid #e6e6e6;
            display: inline-block;
            height: 45px;
            padding: 1px;
            vertical-align: top;
            width: 70px;
        }
        .waybill-img-thumb a {
            display: table-cell;
            height: 45px;
            line-height: 0;
            overflow: hidden;
            text-align: center;
            vertical-align: middle;
            width: 70px;
        }
        .waybill-img-thumb a img {
            max-height: 45px;
            max-width: 70px;
        }
        .waybill-img-size {
            color: #777;
            display: inline-block;
            line-height: 20px;
            margin-left: 10px;
            vertical-align: top;
        }
        .waybill_item { background-color: #FEF5E6; position: absolute; left: 0; top: 0; width: 90px; height: 20px; padding: 1px 5px 4px 5px; border-color: #FFBEBC; border-style: solid; border-width: 1px 1px 1px 1px; cursor: move;}
        .waybill_item:hover { padding: 1px 5px 1px 5px; border-color: #FF7A73; border-width: 1px 1px 4px 1px;}
    </style>
    <script type="text/javascript" src="js/jquery.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/common.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.poshytip.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.printarea.js" charset="utf-8"></script>

    <title>232321111</title>
</head>
<body>
<div class="print-layout">
    <div class="print-btn" id="printbtn" title="选择喷墨或激光打印机<br/>根据下列纸张描述进行<br/>设置并打印发货单据"><i></i><a href="javascript:void(0);">打印</a></div>

    <div class="a4-size"></div>
    <dl class="a4-tip">
        <dt>
        <h1>A4</h1>
        <em>Size: 210mm x 297mm</em></dt>
        <dd>当打印设置选择A4纸张、竖向打印、无边距时每张A4打印纸可输出2页订单。</dd>
    </dl>
    <div class="print-page">
        <div id="printarea">
            <div class="orderprint">
                <div class="top">
                    <div class="full-title">商品詳情</div>
                </div>
                <div class="my_spec_list">
                    <table  style="height: 224px; "   cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="
          width:60%;
                    font-size:16px;
                    border-top-width:1px;
                    border-left-width: 1px;
                    border-bottom-width: 1px;
                    border-top-style: solid;
                    border-left-style: solid;
                    border-bottom-style: solid;
                    border-top-color: #333;
                    border-left-color: #333;
                    border-bottom-color: #333;
                    line-height: 20px;
                    padding-left: 30px;
                    " >
                                <p  style="font-size: 22px;margin-bottom: 0px;margin-top:18px;font-weight: bold;"> 人造球形绿植盘景</p>
                                <table   style="width: 200px;height: 60px;"     cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>

                                            <dl  style="list-style-type:none;margin: 0 0 -12px 0; ">
                                                <dt>颜色</dt>
                                                <dt>类型</dt>
                                                <dt>尺寸</dt>
                                            </dl>

                                        </td>
                                        <td>
                                            <dl style="margin: 0 0 -12px 0;">
                                                <dt><div class="goods_spec">：<em title="black">black</em></div><div class="goods_spec">：<em title="金属">金属</em></div><div class="goods_spec">：<em title="1280mm*1280mm">1280mm*1280mm</em></div></dt>
                                            </dl>
                                        </td>
                                    </tr>
                                </table>             <dl style=" margin-top: 8px;" >
                                    <dt><strong>产品编号</strong>:FZZW0001</dt>
                                    <dt><strong>SKUID</strong>:60</dt>
                                    <dt style="font-size: 36px;padding-top: 5px;font-weight: bold;"> ¥:11.00</dt>
                                </dl>
                            </td>
                            <td style="
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-top-style: solid;
            border-right-style: solid;
            border-bottom-style: solid;
            border-top-color: #333;
            border-right-color: #333;
            border-bottom-color: #333; ">
                                <p>
                                    <img style="width:168px; height:168px; padding:18px" src="http://www.s.com/upload/mall/store/1/60.png"/></p></td>
                            <td style="width:30%;"> </td>
                        </tr>
                    </table>
                    <p style="margin-bottom:2px; "></p>
                </div>
                <div class="my_spec_list">
                    <table  style="height: 224px; "   cellspacing="0" cellpadding="0">
                        <tr>
                            <td style="
          width:60%;
                    font-size:16px;
                    border-top-width:1px;
                    border-left-width: 1px;
                    border-bottom-width: 1px;
                    border-top-style: solid;
                    border-left-style: solid;
                    border-bottom-style: solid;
                    border-top-color: #333;
                    border-left-color: #333;
                    border-bottom-color: #333;
                    line-height: 20px;
                    padding-left: 30px;
                    " >
                                <p  style="font-size: 22px;margin-bottom: 0px;margin-top:18px;font-weight: bold;"> 人造球形绿植盘景</p>
                                <table   style="width: 200px;height: 60px;"     cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>

                                            <dl  style="list-style-type:none;margin: 0 0 -12px 0; ">
                                                <dt>颜色</dt>
                                                <dt>类型</dt>
                                                <dt>尺寸</dt>
                                            </dl>

                                        </td>
                                        <td>
                                            <dl style="margin: 0 0 -12px 0;">
                                                <dt><div class="goods_spec">：<em title="black">black</em></div><div class="goods_spec">：<em title="金属">金属</em></div><div class="goods_spec">：<em title="2480mm*2480mm">2480mm*2480mm</em></div></dt>
                                            </dl>
                                        </td>
                                    </tr>
                                </table>             <dl style=" margin-top: 8px;" >
                                    <dt><strong>产品编号</strong>:FZZW0002</dt>
                                    <dt><strong>SKUID</strong>:61</dt>
                                    <dt style="font-size: 36px;padding-top: 5px;font-weight: bold;"> ¥:11.00</dt>
                                </dl>
                            </td>
                            <td style="
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-top-style: solid;
            border-right-style: solid;
            border-bottom-style: solid;
            border-top-color: #333;
            border-right-color: #333;
            border-bottom-color: #333; ">
                                <p>
                                    <img style="width:168px; height:168px; padding:18px" src="http://www.s.com/upload/mall/store/1/61.png"/></p></td>
                            <td style="width:30%;"> </td>
                        </tr>
                    </table>
                    <p style="margin-bottom:2px; "></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    $(function(){
        $("#printbtn").click(function(){
            $("#printarea").printArea();
        });
    });
    //打印提示
    $('#printbtn').poshytip({
        className: 'tip-yellowsimple',
        showTimeout: 1,
        alignTo: 'target',
        alignX: 'center',
        alignY: 'bottom',
        offsetY: 5,
        allowTipHover: false
    });
</script>
</html>