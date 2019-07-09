alert(1);
// jQuery(function() {
//   jQuery(".head__logo").click(function() {
//   	alert();
//   });
// });

alert('関数バージョン1');
//jsファイルを動的に読む場合はこれじゃダメ
$(function() {
  alert('関数バージョン2');
  $(".head__logo").click(function() {
  alert('関数バージョンクリック');
  return false;
  });
});