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
    margin-left: 50%;
  }
  to {
    margin-left: 0%;
  }
}
.<?=$rootclass; ?> .slide-top {
  animation: 2s slide-top;
}
@keyframes slide-top {
  from {
    margin-top: -5%;
  }
  to {
    margin-top: 0%;
  }
}

svg {
  width: 30px;
  
  margin-left: 40px auto 0;
}

.path {
  stroke-dasharray: 1000;
  stroke-dashoffset: 0;
}
.path.circle {
  -webkit-animation: dash 3s ease-in-out;
  animation: dash 3s ease-in-out;
}
.path.line {
  stroke-dashoffset: 1000;
  -webkit-animation: dash 3s 3s ease-in-out forwards;
  animation: dash 2s 3s ease-in-out forwards;
}
.path.check {
  stroke-dashoffset: -100;
  -webkit-animation: dash-check 2s 2s ease-in-out forwards;
  animation: dash-check 2s 1s ease-in-out forwards;
}


@-webkit-keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@keyframes dash {
  0% {
    stroke-dashoffset: 1000;
  }
  100% {
    stroke-dashoffset: 0;
  }
}
@-webkit-keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
@keyframes dash-check {
  0% {
    stroke-dashoffset: -100;
  }
  100% {
    stroke-dashoffset: 900;
  }
}
.table .thead-dark th {
    color: #fff;
    background-color: #212529;
    border-color: #32383e;
    text-align: center;
}
.table tr {
  
    text-align: center;
}

i.notes{
  font-size:10px;
  line-height: 1.6px;
}

h1 {
  font-size: 24px;
  margin: 10px 0 0 0;
  font-weight: lighter;
  text-transform: uppercase;
  color: #eeeeee;
}

p {
  font-size: 12px;
  font-weight: light;
  color: #333333;
}

span a {
  font-size: 18px;
  color: #cccccc;
  text-decoration: none;
  margin: 0 10px;
  transition: all 0.4s ease-in-out;
}
span a:hover {
  color: #ffffff;
}

@-webkit-keyframes float {
  0% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
  50% {
    box-shadow: 0 25px 15px 0px rgba(0, 0, 0, 0.2);
    transform: translatey(-20px);
  }
  100% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
}

@keyframes float {
  0% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
  50% {
    box-shadow: 0 25px 15px 0px rgba(0, 0, 0, 0.2);
    transform: translatey(-20px);
  }
  100% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
}

</style>