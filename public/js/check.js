function check() {
  const title = document.getElementById("title").value;
  if(title.length == 0) {
    alert('タイトルが入力されておりません。');
    return;
  }
  const content = document.getElementById("content").value;
  if(content.length == 0) {
    alert('本文が入力されておりません。');
    return;
  }
  const content = document.getElementById("tag").value;
  if(tag.length == 0) {
    alert('タグを選択してください');
    return;
  }
  document.soudan.submit();
}