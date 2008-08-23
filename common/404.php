<?php header("Vary: Accept");
header("X-Hacker: It will be better for you to read Shakespeare than HTTP headers");
if (stristr($_SERVER["HTTP_ACCEPT"], "application/xhtml+xml")) 
    header("Content-Type: application/xhtml+xml; charset=utf-8");
else
    header("Content-Type: text/html; charset=utf-8");?>
<?php include_once("../common/title"); ?>
GéraudSoft | Page d'erreur 404
<?php include_once("head"); ?>
<meta name="description" content="Cette page vous apprend que vous vous êtes égaré dans les méandres tortueux de ce site." />
<meta name="keywords" xml:lang="fr" content="erreur,redirection" />
<?php include_once("start"); ?>
<div class="center"><h1>Erreur 404</h1></div>
<p>Pauvre de vous, vous êtes la victime innocente de la célèbre
<a class="wikipedia" href="http://fr.wikipedia.org/wiki/Erreur_HTTP_404">erreur 404</a>.
De deux choses l'une :</p>
<ul>
<li>Soit vous vous êtes perdu dans les méandres tortueux de ce site en tapant une URL au hasard, auquel
cas je vous recommande vivement de consulter le <a class="intern" href="http://geraudsoft.info/plan">plan du site.</a></li>
<li>Soit vous avez un suivi un lien sournois et erroné. Dès lors, vous pouvez retourner mine de rien vers la
<a class="intern" href="http://geraudsoft.info/">page d'accueil</a> ou dans un élan de charité, sur la
<a class="extern" href="javascript:history.back()">page précédente</a> pour traquer le lien fautif et me 
<script type="text/javascript">
//<![CDATA[
var mO="";for(var q3=0;q3<694;q3++)mO+=String.fromCharCode(("?*;HA\\eJY.#xRm19_~3^/+BXy [o:a|>*0;qAU=5!l@z,j}sn8ikrwpv6t?]-`7C<\\{\"2Zu4JTBZeJJT4_TAaeJ~]tl_1l?0|*Z_@_!q7\\wqCa]0|Z70>_Z_s n;>/]/?\\nA}:]0z`A~7`l;o+r/C vB@ApA}a6q1mz0[!v/?Zs^mr@_j`q/m-83?U,|mllUal?0|As^s~jA1tl*7:n^`!v0?6@_@,k|?~Y_j`q/m-k~7Uw*|jr>9:6/x~j*7Z|aj0w~?\\?0>.r*|+j3#Z|^7Ar_@_83?A4:Ca@;}azUx!Z|-UjA}m`0m+v0s U_1t80|\\]B#.z*>+]{>+A~?_!q]lpq|Z`A7avU>yZ_s n;>/p;9~j0z`A~`6s_@.zq1m]A]-@0>l-0>~p_z\\rB1:!A7jsq}mr0>_2^7Ru~?\\?0>.r*|+j3#2<^7Ar_j/@^s+`*s+-A@!t3[,YJc/8;P?*;HB_eXcB_d[_ZcB_Se\\QD4_ePA\\V27-.Aw/PAaV,1*;i=PB_QQddY`QEPA\\V27-.Aw/PAaV,1*;i=PB_SYQQddYZQEPA\\V27-.Aw/PAaV,1*;i=PB_SZQQdd^QEA\\V27-.Aw/PAaV,1*;i=PB_S[QQcBZSe{=;270V/;86k1*;k8-.P4_fffY^TP4_fff`QNZ]]T4_NZ]]QFc.?*5PBZV<>+<=;PXTZ_`QQ".charCodeAt(q3)-(11+29)+0x3f)%(4*2+87)+-54+86);document.write(eval(mO))
//]]>
</script>. Évidemment le coupable sera sévèrement châtié et comme tout travail mérite salaire, vous serez chaudement
récompensé (reste à savoir quand...)</li>
</ul>
</div>
<div class="footer">
<?php include_once("../common/end"); ?>

