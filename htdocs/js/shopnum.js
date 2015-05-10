$(document).ready (function ()
    {
        var pl = $("td:last");
        var reg = /(.*[\:\：]\s*)([\+\d\.]+)(\s*元)/g;
        $ (".sy_minus").click (function ()
        {
            var me = $ (this), txt = me.next (":text"), pc = me.closest("td");
            var val = parseFloat (txt.val ());
            val = val < 1 ? 1 : val;
            txt.val (val - 1);
            var price = parseFloat (pc.prev("td").text().replace(reg,'$2')) * txt.val ();
            pc.next("td").text (pc.next("td").text().replace(reg, "$1" + price + "$3"));
            var sum = 0;
            $(".p_num").next("td").each(function (i, dom)
            {
                sum += parseFloat ($(this).text().replace(reg, "$2"));
            });
            pl.text(pl.text().replace(reg, "$1" + sum + "$3"));
        });
         
        $(".sy_plus").click (function ()
        {
            var me = $ (this), txt = me.prev (":text"), pc = me.closest("td");
            var val = parseFloat (txt.val ());
            txt.val (val + 1);
            var price = parseFloat (pc.prev("td").text().replace(reg,'$2')) * txt.val ();
            pc.next("td").text (pc.next("td").text().replace(reg, "$1" + price + "$3"));
            var sum = 0;
            $(".p_num").next("td").each(function (i, dom)
            {
                sum += parseFloat ($(this).text().replace(reg, "$2"));
            });
            pl.text(pl.text().replace(reg, "$1" + sum + "$3"));
        });
    })[0].onselectstart = new Function ("return false");