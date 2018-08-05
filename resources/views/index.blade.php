<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TINK - Start Tinking in PHP</title>

        <!-- Styles -->
        <style>
            #editor {
                font-size: 14px;
                margin: 0;
                position: absolute;
                top: 0;
                bottom: 50%;
                left: 0;
                right: 0;
            }
            #result {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                width: 100%;
                height: 50%;
                font-size: 16px;
                word-wrap: break-word;
            }
            .btns {
                float: left;
                margin-left: 1px;
            }
            .run-btns {
                border: none;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                background-color: #e7e7e7;
                color: #000;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            #result-window {
                width: 100%;
                font-size: 16px;
                word-wrap: break-word;
                height: 85%;
            }
            pre {
                white-space: pre-wrap;       /* Since CSS 2.1 */
                white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
                white-space: -o-pre-wrap;    /* Opera 7 */
                word-wrap: break-word;       /* Internet Explorer 5.5+ */
            }

        </style>
    </head>
    <body>
        <div id="editor"></div>
        <div id="result">
            <div id="controls">
                <div class="btns">
                    <button class="run-btns" onclick="execute(editor.getValue())" title="Cmd+Enter/Ctrl+Enter">Run (Ctrl/Cmd+Enter)</button>
                </div>
                <div class="btns">
                    <button class="run-btns" onclick="execute(editor.getSelectedText())" title="Cmd+Shift+Enter/Ctrl+Shift+Enter">Run selected (Ctrl/Cmd+Shift+Enter)</button>
                </div>
            </div>
            <br />
            <!-- /*/*<div id="result-window" style="border: 1px #000 solid; margin-top: 30px;"></div>*/*/ -->
            <iframe name="Response" id="result-window"></iframe>
        </div>
        <script src="/js/ace/ace.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/ace/theme-monokai.js"></script>
    </body>
</html>
