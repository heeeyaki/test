<div class="<?=$rootclass; ?>">
<style>


/***** Global Slide *****/
.<?=$rootclass; ?> .slide-right,
.<?=$rootclass; ?> .slide-left {
  width: 100%;
}

/***** Slide Right *****/
.<?=$rootclass; ?> .slide-right {
  animation: 2s slide-right;
}
@keyframes slide-right {
  from {
    margin-left: -20%;
  }
  to {
    margin-left: 0%;
  }
}

/***** Slide Left *****/
.<?=$rootclass; ?> .slide-left {
  animation: 2s slide-left;
}
@keyframes slide-left {
  from {
    margin-left: 90%;
  }
  to {
    margin-left: 0%;
  }
}



</style>