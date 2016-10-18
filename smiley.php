<script type="text/javascript" language="javascript">
/* <![CDATA[ */
    function grin(tag) {
        var myField;
        tag = ' ' + tag + ' ';
        if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
            myField = document.getElementById('comment');
        } else {
            return false;
        }
        if (document.selection) {
            myField.focus();
            sel = document.selection.createRange();
            sel.text = tag;
            myField.focus();
        }
        else if (myField.selectionStart || myField.selectionStart == '0') {
            var startPos = myField.selectionStart;
            var endPos = myField.selectionEnd;
            var cursorPos = endPos;
            myField.value = myField.value.substring(0, startPos)
                          + tag
                          + myField.value.substring(endPos, myField.value.length);
            cursorPos += tag.length;
            myField.focus();
            myField.selectionStart = cursorPos;
            myField.selectionEnd = cursorPos;
        }
        else {
            myField.value += tag;
            myField.focus();
        }
    }
/* ]]> */
</script>
<?php $smilies = '
<a href="javascript:grin(\':razz:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_razz.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':sad:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_sad.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':evil:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_evil.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':exclaim:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_exclaim.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':smile:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_smile.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':redface:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_redface.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':biggrin:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_biggrin.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':surprised:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_surprised.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':eek:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_eek.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':confused:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_confused.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':idea:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_idea.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':lol:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_lol.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':mad:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_mad.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':twisted:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_twisted.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':rolleyes:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_rolleyes.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':wink:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_wink.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':cool:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_cool.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':arrow:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_arrow.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':neutral:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_neutral.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':cry:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_cry.gif" alt="" class="size-smiley"/></a>
<a href="javascript:grin(\':mrgreen:\')" rel="nofollow"><img src="'.get_bloginfo("template_url").'/images/smilies/icon_mrgreen.gif" alt="" class="size-smiley"/></a>'
?>