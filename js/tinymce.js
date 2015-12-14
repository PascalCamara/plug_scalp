jQuery(function($){ 

	console.log('bonjour');

	tinymce.init({
		selector:'textarea',
		height: 500,
		toolbar: 'mybutton',
		menubar: false,
  setup: function (editor) {
    editor.addButton('mybutton', {
      text: 'My button',
      icon: false,
      onclick: function () {
        editor.insertContent('&nbsp;<b>It\'s my button!</b>&nbsp;');
      }
    });
  },


});