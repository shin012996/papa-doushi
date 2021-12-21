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
  const tag = document.getElementById("tag").value;
  if(tag.length == 0) {
    alert('タグを選択してください');
    return;
  }
  document.soudan.submit();
}

function edit(id, title, content) {
  
  document.getElementById("editTitle").value = title;
  document.getElementById("editTitle").value = content;
  document.hensyu.action = '/papa-doushi/post/update/' + id;

}

function editCheck() {
  const editTitle = document.getElementById("editTitle").value;
  if(editTitle.length == 0) {
    alert('タイトルが入力されておりません。');
    return;
  }
  const editContent = document.getElementById("editContent").value;
  if(editContent.length == 0) {
    alert('本文が入力されておりません。');
    return;
  }
  const editTag = document.getElementById("editTag").value;
  if(editTag.length == 0) {
    alert('タグを選択してください');
    return;
  }
  document.hensyu.submit();
}