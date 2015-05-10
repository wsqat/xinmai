
$(document).ready(function (){
//                            /^\d{0,8}\.{0,1}(\d{1,2})?$

     // 表单验证的正则表达式
    var regexEnum = {
        name:/^([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){1,11}$/,
        price:/^[0-9]{1,8}[.]{0,1}([0-9]{1,2})$/,
        number:/^([1-9]{1})([0-9]{2,9})$/,
        talent:/^([\u4E00-\u9FA5]{1,6})$/,
        size:/^([a-zA-Z]|[\u4E00-\u9FA5]){1}([a-zA-Z0-9]|[\u4E00-\u9FA5]|[_]){0,5}$/,
    }

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

    function Focus (obj) {
        obj.parent().parent().removeClass('has-error');
        obj.next().next().css('display','none');
    }

    $('#name').blur(function () {
        check($(this),regexEnum.name);
    });
    $('#name').focus(function () {
        Focus($(this));
    });

    $('#type').blur(function () {
        checkEmpty($('#type'));
    });
    $('#type').focus(function () {
        Focus($(this));
    });
    
    $('#price').blur(function () {
        check($(this),regexEnum.price);
    });
    $('#price').focus(function () {
        Focus($(this));
    });

    $('#number').blur(function () {
        check($(this),regexEnum.number);
    });
    $('#number').focus(function () {    
        Focus($(this));
    });

    $('#size').blur(function () {
        check($(this),regexEnum.size);
    });
    $('#size').focus(function () {
        Focus($(this));
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
        if ((checkEmpty($('#name')) == true) && (checkEmpty($('#type')) == true) &&(checkEmpty($('#price')) == true) && (checkEmpty($('#number')) == true) && (checkEmpty($('#size')) == true) && checkTextarea($('#textarea'))) {
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