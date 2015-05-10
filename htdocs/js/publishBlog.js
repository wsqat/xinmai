$(document).ready(function (){

      // 表单验证的正则表达式
    var regexEnum = {
        name:/^([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){1,11}$/,
        nation:/^([\u4E00-\u9FA5]{1,6})$/,
        work:/^([\u4E00-\u9FA5]{1,6})$/,
        height:/^([1-9]){1}([0-9]){2,3}$/,
        talent:/^([\u4E00-\u9FA5]{1,6})$/,
        concern1:/^([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){1,11}$/,
        concern2:/^([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){1,11}$/,
        place:/^([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){1,11}$/,
    }

    //日期选择控件
    $('.form_datetime').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        minView:2
        //showMeridian: 1
    });

    // 发布表单的验证
    function checkEmpty (obj) {
        if (obj.val() == '') {
            obj.parent().parent().addClass('has-error');
            obj.next().next().css('display','block');
            return false;
        } else{
            obj.parent().parent().removeClass('has-error');
            obj.next().next().css('display','none');
            return true;
        };
    }

    function Focus (obj) {
        obj.parent().parent().removeClass('has-error');
        obj.next().next().css('display','none');
    }

    // 普通输入检查
    function check(obj,regEx) {
        obj.next().css('display','block');
        if(regEx.test(obj.val()) == false) {
            obj.next().removeClass('glyphicon-ok').addClass('glyphicon-remove');
            obj.parent().parent().removeClass('has-success').addClass('has-error');
            obj.parent().next().css('display','block');
        } else{
            obj.next().removeClass('glyphicon-remove').addClass('glyphicon-ok');
            obj.parent().parent().removeClass('has-error').addClass('has-success');
            obj.parent().next().css('display','none');
        }
    }

    $('#name').blur(function () {
        check($(this),regexEnum.name);
    });
    $('#name').focus(function () {
        Focus($(this));
    });

    
    $('#nation').blur(function () {
       check($(this),regexEnum.nation); 
    });
    $('#nation').focus(function () {
        Focus($(this));
    });

    $('#work').blur(function () {
        check($(this),regexEnum.work);
    });
    $('#work').focus(function () {
       Focus($(this)); 
    });

    $('#height').blur(function () {
        check($(this),regexEnum.height);
    });
    $('#height').focus(function () {
        Focus($(this));
    });


    $('#talent').blur(function () {
        check($(this),regexEnum.talent);
    });
    $('#talent').focus(function () {
        Focus($(this));
    });

    $('#concern1').blur(function () {
        check($(this),regexEnum.concern1);
    });
    $('#concern1').focus(function () {
        Focus($(this));
    });

    $('#concern2').blur(function () {
       check($(this),regexEnum.concern2);
    });
    $('#concern2').focus(function () {
        Focus($(this));
    });

    $('#place').blur(function () {
        check($(this),regexEnum.place);
    });
    $('#place').focus(function () {
        Focus($(this));
    });

    $('#dtp_input1').blur(function () {
        checkEmpty($('#dtp_input1'));
    });
    $('#dtp_input1').focus(function () {
        Focus($('#dtp_input1'));
    });

    // textarea验证
    function checkTextarea(obj){
        var str = obj.val();
        var realLength = 0, len = str.length, charCode = -1;
        for (var i = 0; i < len; i++) {
            charCode = str.charCodeAt(i);
            if (charCode >= 0 && charCode <= 128) realLength += 1;
            else realLength += 2;
        }
        var num = Math.floor((1600 - realLength)/2);
        if (num>=0&&num<=800) {
            $("#num").text('您还可以输入'+num+'字');
            return true;
        } else{
            $("#num").text('已经超过'+(-num)+'字');
            return false;
        };
    }
    $("#textarea").bind("input propertychange",function () {
        checkTextarea($('#textarea'));
    });



    // 提交验证
    $('#publish').click(function () {
        if ((checkEmpty($('#name')) == true) &&(checkEmpty($('#nation')) == true) && (checkEmpty($('#work')) == true) && (checkEmpty($('#talent')) == true) && (checkEmpty($('#concern1')) == true) && (checkEmpty($('#concern2')) == true) && (checkEmpty($('#height')) == true) && (checkEmpty($('#place')) == true) && (checkEmpty($('#dtp_input1')) == true) && checkTextarea($('#textarea'))) {
                $('#publish').html('发布ing...');
                console.log('可以提交');
                $('#publishform').submit();
                return true;
            } else {
                console.log('请填写所有必填项之后提交');
                return false;
            }
        
    });
});