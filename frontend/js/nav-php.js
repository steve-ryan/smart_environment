$(document).ready(() => {
  $("[rel='register']").on("click", evt => {
    evt.preventDefault();
    evt.stopPropagation();
    evt.stopImmediatePropagation();
    $(".redisplay").remove();
    $("[rel='root']").load("./../../backend/php/register_clients.php");
    $("[rel='reg_user']").on("click", evt => {
      evt.preventDefault();
      evt.stopPropagation();
      evt.stopImmediatePropagation();
      $("[rel='root']").load("./backend/php/login_client.php");
    });
  });

  $("[rel='login']").on("click", () => {
    $(".redisplay").remove();
    $("[rel='root']").load("./../../backend/php/login_client.php");
  });

  $("[rel='home']").on("click", () => {
    $("h2.log").css({
      "z-index": "10px",
      " color": "red",
      "font-size": "19px",
      "margin-top": "-72px",
      "padding-left": "1270px",
      position: "relative"
    });
    $("[rel='root']").load("./../../backend/php/home.php");
  });
  $("[rel='medicinal']").on("click", () => {
    $("h2.log").css({
      "z-index": "10px",
      " color": "red",
      "font-size": "19px",
      "margin-top": "-72px",
      "padding-left": "1270px",
      position: "relative"
    });
    $("[rel='root']").load("./../../backend/php/medicinal_client.php");
  });
  $("[rel='exotic']").on("click", () => {
    $("h2.log").css({
      "z-index": "10px",
      " color": "red",
      "font-size": "19px",
      "margin-top": "-72px",
      "padding-left": "1270px",
      position: "relative"
    });
    $("[rel='root']").load("./../../backend/php/exotic_client.php");
  });

  $("[rel='fruits']").on("click", () => {
    $("h2.log").css({
      "z-index": "10px",
      " color": "red",
      "font-size": "19px",
      "margin-top": "-72px",
      "padding-left": "1270px",
      position: "relative"
    });
    $("[rel='root']").load("./../../backend/php/fruit_client.php");
  });
  $("[rel='indiginious']").on("click", () => {
    $("h2.log").css({
      "z-index": "10px",
      " color": "red",
      "font-size": "19px",
      "margin-top": "-72px",
      "padding-left": "1270px",
      position: "relative"
    });
    $("[rel='root']").load("./../../backend/php/indiginous_client.php");
  });
  $("[rel='tree-ben']").on("click", () => {
    $("h2.log").css({
      "z-index": "10px",
      " color": "red",
      "font-size": "19px",
      "margin-top": "-72px",
      "padding-left": "1270px",
      position: "relative"
    });
    $("[rel='root']").load("./../../backend/php/fruit_client.php");
  });

  $("[rel='btn-log']").on("click", () => {
    $(".log").remove();

    $("[rel='log']").remove();
    $("[rel='root']").remove();
    window.location.assign("./../../backend/php/index.php");
  });

  //  $("[rel='backreg']").on("click",(evt)=>{
  //      evt.preventDefault();
  //      alert("backtrack")
  //      $("[rel='root']").load("./../../backend/php/register_clients.php");
  //  })

  //  $("[rel='regfro']").on("click",(evt)=>{
  //      evt.preventDefault();
  //     $("[rel='root']").load("./../../backend/php/login_client.php");
  // })
  // $("[rel='root']").load("./../../backend/php/home.php")

// THE rel= med reloads the same page if home.php loads as root but on disabling home.php to load as root it is giving a blank page with on click more variety.

//   $("[rel='med']").on("click", () => {
//     $("[rel='root']").load("./../../backend/php/medicinal.php");
//   });

  $("[rel='root']").load("./../../backend/php/home.php");
});
