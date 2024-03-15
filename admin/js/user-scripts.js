

function setParamType(type, link) {
  // 폼 생성
  var form = document.createElement("form");
  form.method = "post";
  form.action = link; 

  // 파라미터 생성
  var input = document.createElement("input");
  input.type = "hidden";
  input.name = "mode";
  input.value = type;

  // 폼에 파라미터 추가
  form.appendChild(input);

  // 폼을 현재 페이지에 추가하고 전송
  document.body.appendChild(form);
  form.submit();
}




