<?
// http://t1m0n.name/air-datepicker/docs/index-ru.html
$disabledDates = "'".implode("','", $calendar_disabled_dates)."'";

?>
<div id="sob_calendar"></div>
<script>
Date.prototype.yyyymmdd = function() {
  var mm = this.getMonth() + 1; // getMonth() is zero-based
  var dd = this.getDate();

  return [this.getFullYear(),
          (mm>9 ? '' : '0') + mm,
          (dd>9 ? '' : '0') + dd
         ].join('-');
};
document.addEventListener("DOMContentLoaded", function(event) {
  var disabledDays = [<?=$disabledDates?>];

  $('#sob_calendar').datepicker({
      onRenderCell: function (date, cellType) {
          if (cellType == 'day') {
              var day = date.yyyymmdd(),
                  isDisabled = true,
                  ret = date.getDate();

              $(disabledDays).each(function(index, el) {
                if ( el == day ) {
                  isDisabled = false;
                  ret = '<a href="/moscow/sorevnovaniya/'+day+'">'+date.getDate()+'</a>';
                }
              });

              return {
                  disabled: isDisabled,
                  html: ret
              }
          }
      }
  })
});
</script>