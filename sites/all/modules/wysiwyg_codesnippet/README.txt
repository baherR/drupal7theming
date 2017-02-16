WYSIWYG CodeSnippet

Installation
============

This module has two requirements, WYSIWYG, and Libraries. Also, the only supported editor is CKEditor 4.5.x, which means you will need the latest dev
version of the WYSIWYG module until they release a stable version that supports CKEditor 4.x.

CKEditor build
==============

For this to work properly, you will need the packed in plugin(s) from CKEditor.com. It is similar to how you initially added the editor, with an extra step:

1. Go to ckeditor.com
2. Select the 'custom build' option
3. From the additional plugins list, add CodeSnippet. The form will automatically add any dependencies this plugin will need.
4. Drop this editor into your sites libraries path, just as you may have done initially when setting up the WYSIWYG.

HighlightJS
===========

With the packed in version, HighlightJS is lacking the full styles library and some of the existing styles are outdated. You will want to download the latest copy of HighlightJS from GitHub at
https://github.com/isagalaev/highlight.js.

From here, overwrite the styles folder in ckeditor/plugins/codesnippet/lib/highlight/styles with highlightjs-master/src/styles from the downloaded zip file from GitHub. Any new style options will now appear in the WYSIWYG Profile form.

Supported Languages
===================

To add new options to the supported languages option in the admin form, you can use an alter hook within your own custom module to add on:

function YOURMODULE_wysiwyg_codesnippet_supported_languages_alter(&$languages) {
  $languages['gherkin'] = 'Gherkin';
  $languages['go'] = 'Go';
}

This would add Gherkin and Go to the list of languages to check off, which will then make them available in the dialog of CKEditor CodeSnippet.

An important thing to note is that the key of the array item needs to match the expected code class for HighlightJS for proper coloring. If you are unsure of the class name, refer to the HighlightJS live demo page and inspect the
codeblock of what you want, and check the class on the code HTML element.

Additionally, you will need to add any new languages to HighlightJS by customizing its build. You can customize the build at https://highlightjs.org/download/

1. Select all the languages you want to support with syntax highlighting and download it.
2. Overwrite ckeditor/plugins/codesnippet/highlightjs/lib/highlight/highlight.pack.js with this new file.
3. Clear Drupal caches.