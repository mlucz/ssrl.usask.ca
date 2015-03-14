  $(function() {
    $("div.ssrl_labheaders").click(function() {
      var content = $(this).parent().find("div.ssrl_labdetails");
      if (content.is(":hidden")) {
        content.show("blind");
        $(this).find("img.ssrl_headericon").attr("src","images/icons/minusicon.png");
      } else {
        content.hide("blind");
        $(this).find("img.ssrl_headericon").attr("src","images/icons/plusicon.png");
      }
    });
  });

  function ssrl_openAll() {
    $("div.ssrl_labdetails").filter(":hidden").show("blind");
    $("img.ssrl_headericon").attr("src","images/icons/minusicon.png");
  }

  function ssrl_closeAll() {
    $("div.ssrl_labdetails").filter(":visible").hide("blind");
    $("img.ssrl_headericon").attr("src","images/icons/plusicon.png");
  }

