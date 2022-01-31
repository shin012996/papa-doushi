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
  const tags = document.getElementById("tags").value;
  if(tags.length == 0) {
    alert('タグを選択してください');
    return;
  }
  document.soudan.submit();
}

function edit(id, title, content, tags) {
  
  document.getElementById("editTitle").value = title;
  document.getElementById("editContent").value = content;
  document.getElementById("editTags").value = tags;
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
  const editTags = document.getElementById("editTags").value;
  if(editTags.length == 0) {
    alert('タグを選択してください');
    return;
  }
  document.hensyu.submit();
}

// 削除前確認
function deletePost(e) {
  'use strict';

  if (confirm('本当に削除してもいいてすか？')) {
    document.getElementByld('form_' + e.dataset.id).submit();
  }
}

// 投稿モーダル タグ入力欄追加
function addInputTag() {
  const tag_input_add = document.getElementById("tag_input_add");
  const input_tag = document.createElement('input');
  input_tag.classList.add('form-control');
  input_tag.classList.add('col-6');
  input_tag.name = 'tags[]';
  console.log(tag_input_add);
  tag_input_add.appendChild(input_tag);
}

