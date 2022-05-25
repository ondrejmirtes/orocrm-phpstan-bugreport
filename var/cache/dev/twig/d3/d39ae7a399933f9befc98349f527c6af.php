<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OroApi/ApiDoc/layout.html.twig */
class __TwigTemplate_6c5cd25d0c3215c4ca3a3c2f2af5c5bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroApi/ApiDoc/layout.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["apiName"]) || array_key_exists("apiName", $context) ? $context["apiName"] : (function () { throw new RuntimeError('Variable "apiName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</title>
        <style type=\"text/css\">
            ";
        // line 9
        echo (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 9, $this->source); })());
        echo "
        </style>
        <script>
            ";
        // line 12
        echo (isset($context["js"]) || array_key_exists("js", $context) ? $context["js"] : (function () { throw new RuntimeError('Variable "js" does not exist.', 12, $this->source); })());
        echo "
        </script>
    </head>
    <body>
        <div id=\"header\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["rootRoute"]) || array_key_exists("rootRoute", $context) ? $context["rootRoute"] : (function () { throw new RuntimeError('Variable "rootRoute" does not exist.', 17, $this->source); })()));
        echo "\"><h1>";
        echo twig_escape_filter($this->env, (isset($context["apiName"]) || array_key_exists("apiName", $context) ? $context["apiName"] : (function () { throw new RuntimeError('Variable "apiName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</h1></a>
            ";
        // line 18
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new RuntimeError('Variable "enableSandbox" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                <div id=\"sandbox_configuration\">
                    ";
            // line 20
            if ((twig_length_filter($this->env, (isset($context["bodyFormats"]) || array_key_exists("bodyFormats", $context) ? $context["bodyFormats"] : (function () { throw new RuntimeError('Variable "bodyFormats" does not exist.', 20, $this->source); })())) > 0)) {
                // line 21
                echo "                    body format:
                    <select id=\"body_format\">
                        ";
                // line 23
                if (twig_in_filter("form", (isset($context["bodyFormats"]) || array_key_exists("bodyFormats", $context) ? $context["bodyFormats"] : (function () { throw new RuntimeError('Variable "bodyFormats" does not exist.', 23, $this->source); })()))) {
                    echo "<option value=\"form\"";
                    echo ((((isset($context["defaultBodyFormat"]) || array_key_exists("defaultBodyFormat", $context) ? $context["defaultBodyFormat"] : (function () { throw new RuntimeError('Variable "defaultBodyFormat" does not exist.', 23, $this->source); })()) == "form")) ? (" selected") : (""));
                    echo ">Form Data</option>";
                }
                // line 24
                echo "                        ";
                if (twig_in_filter("json", (isset($context["bodyFormats"]) || array_key_exists("bodyFormats", $context) ? $context["bodyFormats"] : (function () { throw new RuntimeError('Variable "bodyFormats" does not exist.', 24, $this->source); })()))) {
                    echo "<option value=\"json\"";
                    echo ((((isset($context["defaultBodyFormat"]) || array_key_exists("defaultBodyFormat", $context) ? $context["defaultBodyFormat"] : (function () { throw new RuntimeError('Variable "defaultBodyFormat" does not exist.', 24, $this->source); })()) == "json")) ? (" selected") : (""));
                    echo ">JSON</option>";
                }
                // line 25
                echo "                    </select>
                    ";
            }
            // line 27
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["requestFormats"]) || array_key_exists("requestFormats", $context) ? $context["requestFormats"] : (function () { throw new RuntimeError('Variable "requestFormats" does not exist.', 27, $this->source); })())) > 0)) {
                // line 28
                echo "                    request format:
                    <select id=\"request_format\">
                    ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["requestFormats"]) || array_key_exists("requestFormats", $context) ? $context["requestFormats"] : (function () { throw new RuntimeError('Variable "requestFormats" does not exist.', 30, $this->source); })()));
                foreach ($context['_seq'] as $context["format"] => $context["header"]) {
                    // line 31
                    echo "                        <option value=\"";
                    echo twig_escape_filter($this->env, $context["header"], "html", null, true);
                    echo "\"";
                    echo ((((isset($context["defaultRequestFormat"]) || array_key_exists("defaultRequestFormat", $context) ? $context["defaultRequestFormat"] : (function () { throw new RuntimeError('Variable "defaultRequestFormat" does not exist.', 31, $this->source); })()) == $context["format"])) ? (" selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $context["format"], "html", null, true);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['format'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                    ";
            }
            // line 34
            echo "                    </select>
                    ";
            // line 35
            if ((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 36, $this->source); })()), "delivery", [], "any", false, false, false, 36) == "http") && (twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36) == "basic"))) {
                    // line 37
                    echo "                            api login: <input type=\"text\" id=\"api_login\" value=\"\"/>
                            api password: <input type=\"text\" id=\"api_pass\" value=\"\"/>
                        ";
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 39
(isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 39, $this->source); })()), "delivery", [], "any", false, false, false, 39), [0 => "query", 1 => "http", 2 => "header"])) {
                    // line 40
                    echo "                            api key: <input type=\"text\" id=\"api_key\" value=\"\"/>
                        ";
                }
                // line 42
                echo "
                        ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 43, $this->source); })()), "custom_endpoint", [], "any", false, false, false, 43)) {
                    // line 44
                    echo "                            api endpoint: <input type=\"text\" id=\"api_endpoint\" value=\"\"/>
                        ";
                }
                // line 46
                echo "                        <button id=\"save_api_auth\" type=\"button\">Save</button>
                        <button id=\"clear_api_auth\" type=\"button\">Clear</button>
                    ";
            }
            // line 49
            echo "                </div>
            ";
        }
        // line 51
        echo "            <br style=\"clear: both;\" />
        </div>
        ";
        // line 53
        $this->loadTemplate((isset($context["motdTemplate"]) || array_key_exists("motdTemplate", $context) ? $context["motdTemplate"] : (function () { throw new RuntimeError('Variable "motdTemplate" does not exist.', 53, $this->source); })()), "@OroApi/ApiDoc/layout.html.twig", 53)->display($context);
        // line 54
        echo "        <div class=\"container\" id=\"resources_container\">
            <ul id=\"resources\">
                ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "            </ul>
        </div>
        <p id=\"colophon\">
            Documentation auto-generated on ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "
        </p>
        <script>

            var getHash = function() {
              return window.location.hash || '';
            };

            var setHash = function(hash) {
                window.location.hash = hash;
            };

            var clearHash = function() {
                var scrollTop, scrollLeft;

                if(typeof history === 'object' && typeof history.pushState === 'function') {
                    history.replaceState('', document.title, window.location.pathname + window.location.search);
                } else {
                    scrollTop = document.body.scrollTop;
                    scrollLeft = document.body.scrollLeft;

                    setHash('');

                    document.body.scrollTop = scrollTop;
                    document.body.scrollLeft = scrollLeft;
                }
            };

            var showResourceContent = function (contentContainer, updateHash) {
                var toggler = contentContainer.prev(),
                    rootPath = '";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["rootRoute"]) || array_key_exists("rootRoute", $context) ? $context["rootRoute"] : (function () { throw new RuntimeError('Variable "rootRoute" does not exist.', 90, $this->source); })()));
        echo "',
                    apiType = window.location.pathname.substr(rootPath.length + 1) || '";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["defaultView"]) || array_key_exists("defaultView", $context) ? $context["defaultView"] : (function () { throw new RuntimeError('Variable "defaultView" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "',
                    resourceUrl = rootPath + '/' + apiType + '/' + toggler.data('href').substr(1);
                \$.ajax({
                    url: resourceUrl,
                    type: 'GET',
                    success: function(html) {
                        var newContentContainer = \$(html).children('.content');
                        contentContainer.replaceWith(newContentContainer);
                        newContentContainer.trigger('api_resource_content:load');
                        if (updateHash) {
                            setHash(toggler.data('href'));
                        }
                    },
                    error: function(xhr) {
                        contentContainer.text(
                            xhr.status === 404 ? 'Unknown API resource.' : 'The loading failed.'
                        );
                    }
                });
            };

            \$(window).load(function() {
                var id = getHash().substr(1).replace( /([:\\.\\[\\]\\{\\}|])/g, \"\\\\\$1\");
                var elem = \$('#' + id);
                if (elem.length) {
                    setTimeout(function() {
                        \$('body,html').scrollTop(elem.position().top);
                    });
                    elem.find('.toggler').click();
                    var section = elem.parents('.section').first();
                    if (section) {
                        section.addClass('active');
                        section.find('.section-list').slideDown('fast');
                    }
                }
                ";
        // line 126
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new RuntimeError('Variable "enableSandbox" does not exist.', 126, $this->source); })())) {
            // line 127
            echo "                    loadStoredAuthParams();
                ";
        }
        // line 129
        echo "            });

            \$('.toggler').click(function(event) {
                var toggler = \$(this),
                    contentContainer = toggler.next(),
                    isVisible = contentContainer.is(':visible');

                contentContainer.slideToggle('fast');
                if (contentContainer.data('state') !== 'collapsed') {
                    if (isVisible) {
                        clearHash();
                    } else {
                        setHash(toggler.data('href'));
                    }
                } else if (!isVisible) {
                    showResourceContent(contentContainer, true);
                }

                return false;
            });

            \$('.action-show-hide, .section > h1').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (section.hasClass('active')) {
                    section.removeClass('active');
                    section.find('.section-list').slideUp('fast');
                } else {
                    section.addClass('active');
                    section.find('.section-list').slideDown('fast');
                }

            });

            \$('.action-list').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                section.find('.section-list').slideDown('fast');
                section.find('.operation > .content').slideUp('fast');
            });

            \$('.action-expand').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                \$(section).find('ul').slideDown('fast');
                \$(section).find('.operation > .content').each(function(){
                    var contentContainer = \$(this),
                        isVisible = contentContainer.is(':visible');
                    contentContainer.slideDown('fast');
                    if (!isVisible && contentContainer.data('state') === 'collapsed') {
                        showResourceContent(contentContainer, false);
                    }
                });
            });

            ";
        // line 187
        if ((isset($context["enableSandbox"]) || array_key_exists("enableSandbox", $context) ? $context["enableSandbox"] : (function () { throw new RuntimeError('Variable "enableSandbox" does not exist.', 187, $this->source); })())) {
            // line 188
            echo "                var getStoredValue, storeValue, deleteStoredValue;
                var apiAuthKeys = ['api_key', 'api_login', 'api_pass', 'api_endpoint'];

                if ('localStorage' in window) {
                    var buildKey = function (key) {
                        return 'nelmio_' + key;
                    }

                    getStoredValue = function (key) {
                        return localStorage.getItem(buildKey(key));
                    }

                    storeValue = function (key, value) {
                        localStorage.setItem(buildKey(key), value);
                    }

                    deleteStoredValue = function (key) {
                        localStorage.removeItem(buildKey(key));
                    }
                } else {
                    getStoredValue = storeValue = deleteStoredValue = function (){};
                }

                var loadStoredAuthParams = function() {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val(getStoredValue(value));
                        }
                    });
                }

                var setParameterType = function (\$context,setType) {
                    // no 2nd argument, use default from parameters
                    if (typeof setType == \"undefined\") {
                        setType = \$context.parent().attr(\"data-dataType\");
                        \$context.val(setType);
                    }

                    \$context.parent().find('.value').remove();
                    var placeholder = \"\";
                    if (\$context.parent().attr(\"data-dataType\") != \"\" && typeof \$context.parent().attr(\"data-dataType\") != \"undefined\") {
                        placeholder += \"[\" + \$context.parent().attr(\"data-dataType\") + \"] \";
                    }
                    if (\$context.parent().attr(\"data-format\") != \"\" && typeof \$context.parent().attr(\"data-format\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-format\");
                    }
                    if (\$context.parent().attr(\"data-description\") != \"\" && typeof \$context.parent().attr(\"data-description\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-description\");
                    } else {
                        placeholder += \"Value\";
                    }

                    switch(setType) {
                        case \"boolean\":
                            \$('<select class=\"value\"><option value=\"\"></option><option value=\"1\">True</option><option value=\"0\">False</option></select>').insertAfter(\$context);
                            break;
                        case \"file\":
                            \$('<input type=\"file\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                            break;
                        case \"textarea\":
                            \$('<textarea class=\"value\" placeholder=\"'+ placeholder +'\" />').insertAfter(\$context);
                            break;
                        default:
                            \$('<input type=\"text\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                    }
                };

                var toggleButtonText = function (\$btn) {
                    if (\$btn.text() === 'Default') {
                        \$btn.text('Raw');
                    } else {
                        \$btn.text('Default');
                    }
                };

                var renderRawBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-raw');

                    \$container.addClass('prettyprinted');
                    \$container.html(\$('<div/>').text(rawData).html());

                    \$btn.removeClass('to-raw');
                    \$btn.addClass('to-prettify');

                    toggleButtonText(\$btn);
                };

                var renderPrettifiedBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-prettify');

                    \$container.removeClass('prettyprinted');
                    \$container.html(attachCollapseMarker(prettifyResponse(rawData)));
                    prettyPrint && prettyPrint();

                    \$btn.removeClass('to-prettify');
                    \$btn.addClass('to-raw');

                    toggleButtonText(\$btn);
                };

                var unflattenDict = function (body) {
                    var found = true;
                    while(found) {
                        found = false;

                        for (var key in body) {
                            var okey;
                            var value = body[key];
                            var dictMatch = key.match(/^(.+)\\[([^\\]]+)\\]\$/);

                            if(dictMatch) {
                                found = true;
                                okey = dictMatch[1];
                                var subkey = dictMatch[2];
                                body[okey] = body[okey] || {};
                                body[okey][subkey] = value;
                                delete body[key];
                            } else {
                                body[key] = value;
                            }
                        }
                    }
                    return body;
                };

                \$('#save_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            storeValue(value, elm.val());
                        }
                    });
                });

                \$('#clear_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        deleteStoredValue(value);
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val('');
                        }
                    });
                });

                \$(document).on('click', '.tabs li', function() {
                    var contentGroup = \$(this).parents('.content');

                    \$('.pane.selected', contentGroup).removeClass('selected');
                    \$('.pane.' + \$(this).data('pane'), contentGroup).addClass('selected');

                    \$('li', \$(this).parent()).removeClass('selected');
                    \$(this).addClass('selected');
                });

                var getJsonCollapseHtml = function(sectionOpenCharacter) {
                    var \$toggler = \$('<span>').addClass('json-collapse-section').
                            attr('data-section-open-character', sectionOpenCharacter).
                            append(\$('<span>').addClass('json-collapse-marker')
                                    .html('&#9663;')
                    ).append(sectionOpenCharacter);
                    return \$('<div>').append(\$toggler).html();
                };

                var attachCollapseMarker = function (prettifiedJsonString) {
                    prettifiedJsonString = prettifiedJsonString.replace(/(\\{|\\[)\\n/g, function(match, sectionOpenCharacter) {
                        return getJsonCollapseHtml(sectionOpenCharacter) + '<span class=\"json-collapse-content\">\\n';
                    });
                    return prettifiedJsonString.replace(/([^\\[][\\}\\]],?)\\n/g, '\$1</span>\\n');
                };

                var prettifyResponse = function(text) {
                    try {
                        var data = typeof text === 'string' ? JSON.parse(text) : text;
                        text = JSON.stringify(data, undefined, '  ');
                    } catch (err) {
                    }

                    // HTML encode the result
                    return \$('<div>').text(text).html();
                };

                var displayFinalUrl = function(xhr, method, url, data, container) {
                    container.text(method + ' ' + getFinalUrl(method, url, data));
                };

                var displayRequestBody = function(method, data, container, header) {
                    if ('GET' != method && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }

                        container.text(data);
                        container.show();
                        header.show();
                    } else {
                        container.hide();
                        header.hide();
                    }
                };

                var displayProfilerUrl = function(xhr, link, container) {
                    var profilerUrl = xhr.getResponseHeader('X-Debug-Token-Link');
                    if (profilerUrl) {
                        link.attr('href', profilerUrl);
                        container.show();
                    } else {
                        link.attr('href', '');
                        container.hide();
                    }
                };

                var displayResponseData = function(xhr, container) {
                    var data = xhr.responseText;

                    container.data('raw-response', data);

                    renderPrettifiedBody(container);

                    container.parents('.pane').find('.to-prettify').text('Raw');
                    container.parents('.pane').find('.to-raw').text('Raw');
                };

                var displayResponseHeaders = function(xhr, container) {
                    var text = xhr.status + ' ' + xhr.statusText + \"\\n\\n\";
                    text += xhr.getAllResponseHeaders();

                    container.text(text);
                };

                var displayCurl = function(method, url, headers, data, result_container) {
                    var escapeShell = function(param) {
                        param = \"\" + param;
                        return '\"' + param.replace(/([\"\$`\\\\])/g,'\\\\\$1') + '\"';
                    };

                    if (url.startsWith('/')) {
                        url = '";
            // line 431
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 431), "schemeAndHttpHost", [], "any", true, true, false, 431)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 431), "schemeAndHttpHost", [], "any", false, false, false, 431), "")) : ("")), "html", null, true);
            echo "' + url;
                    }
                    url = getFinalUrl(method, url, data);

                    var command = \"curl\";
                    command += \" -X \" + escapeShell(method);

                    if (method != \"GET\" && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }
                        command += \" -d \" + escapeShell(data);
                    }

                    for (headerKey in headers) {
                        if (headers.hasOwnProperty(headerKey)) {
                            command += \" -H \" + escapeShell(headerKey + ': ' + headers[headerKey]);
                        }
                    }

                    command += \" \" + escapeShell(url);

                    result_container.text(command);
                };

                var getFinalUrl = function(method, url, data) {
                    if ('GET' == method && !jQuery.isEmptyObject(data)) {
                        var separator = url.indexOf('?') >= 0 ? '&' : '?';
                        url = url + separator + decodeURIComponent(jQuery.param(data));
                    }

                    return url;
                };

                var displayResponse = function(xhr, method, url, headers, data, result_container) {
                    displayFinalUrl(xhr, method, url, data, \$('.url', result_container));
                    displayRequestBody(method, data, \$('.request-body', result_container), \$('.request-body-header', result_container));
                    displayProfilerUrl(xhr, \$('.profiler-link', result_container), \$('.profiler', result_container));
                    displayResponseData(xhr, \$('.response', result_container));
                    displayResponseHeaders(xhr, \$('.headers', result_container));
                    displayCurl(method, url, headers, data, \$('.curl-command', result_container));

                    result_container.show();
                };

                \$(document).on('submit', '.pane.sandbox form', function() {
                    var url = \$(this).attr('action'),
                        method = \$('[name=\"header_method\"]', this).val(),
                        self = this,
                        params = {},
                        filters = {},
                        formData = new FormData(),
                        doubledParams = {},
                        doubledFilters = {},
                        headers = {},
                        content = \$(this).find('textarea.content').val(),
                        result_container = \$('.result', \$(this).parent());

                    if (method === 'ANY') {
                        method = 'POST';
                    }

                    // set requestFormat
                    var requestFormatMethod = '";
            // line 494
            echo twig_escape_filter($this->env, (isset($context["requestFormatMethod"]) || array_key_exists("requestFormatMethod", $context) ? $context["requestFormatMethod"] : (function () { throw new RuntimeError('Variable "requestFormatMethod" does not exist.', 494, $this->source); })()), "html", null, true);
            echo "';
                    if (requestFormatMethod == 'format_param') {
                        params['_format'] = \$('#request_format option:selected').text();
                        formData.append('_format',\$('#request_format option:selected').text());
                    } else if (requestFormatMethod == 'accept_header') {
                        headers['Accept'] = \$('#request_format').val();
                    }

                    // set default bodyFormat
                    var bodyFormat = \$('#body_format').val() || '";
            // line 503
            echo twig_escape_filter($this->env, (isset($context["defaultBodyFormat"]) || array_key_exists("defaultBodyFormat", $context) ? $context["defaultBodyFormat"] : (function () { throw new RuntimeError('Variable "defaultBodyFormat" does not exist.', 503, $this->source); })()), "html", null, true);
            echo "';

                    var hasFileTypes = false;
                    \$('.parameters .tuple_type', \$(this)).each(function() {
                        if (\$(this).val() == 'file') {
                            hasFileTypes = true;
                        }
                    });

                    if (hasFileTypes && method != 'POST') {
                        alert(\"Sorry, you can only submit files via POST.\");
                        return false;
                    }

                    if (hasFileTypes && bodyFormat != 'form') {
                        alert(\"Body Format must be set to 'Form Data' when utilizing file upload type parameters.\\nYour current bodyFormat is '\" + bodyFormat + \"'. Change your BodyFormat or do not use file type\\nparameters.\");
                        return false;
                    }

                    if (hasFileTypes) {
                        // retrieve all the parameters to send for file upload
                        \$('.parameters .tuple', \$(this)).each(function() {
                            var key, value;

                            key = \$('.key', \$(this)).val();
                            if (\$('.value', \$(this)).attr('type') === 'file' ) {
                                value = \$('.value', \$(this)).prop('files')[0];
                                if(!value) {
                                    value = new File([], '');
                                }
                            } else {
                                value = \$('.value', \$(this)).val();
                            }

                            if (value) {
                                formData.append(key,value);
                            }
                        });
                    }


                    // retrieve all the parameters to send
                    \$('.parameters .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // convert boolean values to boolean
                            if ('json' === bodyFormat && 'boolean' === \$('.tuple_type', \$(this)).val()) {
                                value = '1' === value;
                            }

                            // temporary save all additional/doubled parameters
                            if (key in params) {
                                doubledParams[key] = value;
                            } else {
                                params[key] = value;
                            }
                        }
                    });




                    // retrieve all the filters to send
                    \$('.parameters .tuple.filter', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // temporary save all additional/doubled parameters
                            if (key in filters) {
                                doubledFilters[key] = value;
                            } else {
                                filters[key] = value;
                            }
                        }
                    });




                    // retrieve the additional headers to send
                    \$('.headers .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            headers[key] = value;
                        }

                    });

                    // set default content type
                    if(!('Content-Type' in headers) && -1 !== \$.inArray(method, ['POST', 'PATCH', 'PUT', 'DELETE'])) {
                        if ('form' === bodyFormat) {
                            headers['Content-Type'] = 'application/x-www-form-urlencoded';
                        } else {
                            headers['Content-Type'] = 'application/json';
                        }
                    }

                    // fix parameters in URL
                    for (var key in \$.extend({}, params)) {
                        if (url.indexOf('{' + key + '}') !== -1) {
                            url = url.replace('{' + key + '}', params[key]);
                            delete params[key];
                        }
                    };

                    // merge additional params back to real params object
                    if (!\$.isEmptyObject(doubledParams)) {
                        \$.extend(params, doubledParams);
                    }

                    // disable all the fiels and buttons
                    \$('input, button', \$(this)).attr('disabled', 'disabled');

                    // append the query authentication
                    var api_key_val = \$('#api_key').val();
                    if (authentication_delivery == 'query' && api_key_val.length>0) {
                        url += url.indexOf('?') > 0 ? '&' : '?';
                        url += api_key_parameter + '=' + api_key_val;
                    }

                    // prepare the api enpoint
                    ";
            // line 635
            if (((((isset($context["endpoint"]) || array_key_exists("endpoint", $context) ? $context["endpoint"] : (function () { throw new RuntimeError('Variable "endpoint" does not exist.', 635, $this->source); })()) == "") &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 635, $this->source); })()), "request", [], "any", false, false, false, 635))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 635, $this->source); })()), "request", [], "any", false, false, false, 635), "host", [], "any", false, false, false, 635))) {
                // line 636
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 636, $this->source); })()), "request", [], "any", false, false, false, 636), "getBaseUrl", [], "method", false, false, false, 636), "html", null, true);
                echo "';
                    ";
            } else {
                // line 638
                echo "var endpoint = '";
                echo twig_escape_filter($this->env, (isset($context["endpoint"]) || array_key_exists("endpoint", $context) ? $context["endpoint"] : (function () { throw new RuntimeError('Variable "endpoint" does not exist.', 638, $this->source); })()), "html", null, true);
                echo "';
                    ";
            }
            // line 640
            if (((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 640, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 640, $this->source); })()), "custom_endpoint", [], "any", false, false, false, 640))) {
                // line 641
                echo "                    if (\$('#api_endpoint') && typeof(\$('#api_endpoint').val()) != 'undefined') {
                        endpoint = \$('#api_endpoint').val();
                    }
                    ";
            }
            // line 645
            echo "
                    //add filters as GET params and remove them from params
                    if(method != 'GET'){
                        for (var filterKey in \$.extend({}, filters)){
                            url += url.indexOf('?') > 0 ? '&' : '?';
                            url += filterKey + '=' + filters[filterKey];

                            if (params.hasOwnProperty(filterKey)){
                                delete(params[filterKey]);
                            }
                        }
                    }

                    // prepare final parameters
                    var body = {};
                    if(bodyFormat == 'json' && method != 'GET') {
                        body = unflattenDict(params);
                        body = JSON.stringify(body);
                    } else {
                        body = params;
                    }
                    var data = content.length ? content : body;
                    var ajaxOptions = {
                        url: (url.indexOf('http')!=0?endpoint:'') + url,
                        xhrFields: { withCredentials: true },
                        type: method,
                        data: data,
                        headers: headers,
                        crossDomain: true,
                        beforeSend: function (xhr) {
                            if (authentication_delivery) {
                                var value;

                                if ('http' == authentication_delivery) {
                                    if ('basic' == authentication_type) {
                                        value = 'Basic ' + btoa(\$('#api_login').val() + ':' + \$('#api_pass').val());
                                    } else if ('bearer' == authentication_type) {
                                        value = 'Bearer ' + \$('#api_key').val();
                                    }
                                } else if ('header' == authentication_delivery) {
                                    value = \$('#api_key').val();
                                }

                                xhr.setRequestHeader(api_key_parameter, value);
                            }
                        },
                        complete: function(xhr) {
                            displayResponse(xhr, method, url, headers, data, result_container);

                            // and enable them back
                            \$('input:not(.content-type), button', \$(self)).removeAttr('disabled');
                        }
                    };

                    // overrides body format to send data properly
                    if (hasFileTypes) {
                        ajaxOptions.data = formData;
                        ajaxOptions.processData = false;
                        ajaxOptions.contentType = false;
                        delete(headers['Content-Type']);
                    }

                    // and trigger the API call
                    \$.ajax(ajaxOptions);

                    return false;
                });

                \$(document).on('click', '.operations .operation > .heading', function(e) {
                    if (history.pushState) {
                        history.pushState(null, null, \$(this).data('href'));
                        e.preventDefault();
                    }
                });

                \$(document).on('click', '.json-collapse-section', function() {
                    var openChar = \$(this).data('section-open-character'),
                            closingChar = (openChar == '{' ? '}' : ']');
                    if (\$(this).next('.json-collapse-content').is(':visible')) {
                        \$(this).html('&oplus;' +  openChar + '...' + closingChar);
                    } else {
                        \$(this).html('&#9663;' + \$(this).data('section-open-character'));
                    }
                    \$(this).next('.json-collapse-content').toggle();
                });

                \$(document).on('copy', '.prettyprinted', function () {
                    var \$toggleMarkers = \$(this).find('.json-collapse-marker');
                    \$toggleMarkers.hide();
                    setTimeout(function () {
                        \$toggleMarkers.show();
                    }, 100);
                });

                \$(document).on('click', '.pane.sandbox .to-raw', function(e) {
                    renderRawBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$(document).on('click', '.pane.sandbox .to-prettify', function(e) {
                    renderPrettifiedBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$(document).on('click', '.pane.sandbox .to-expand, .to-shrink', function(e) {
                    var \$headers = \$(this).parents('.result').find('.headers');
                    var \$label = \$(this).parents('.result').find('a.to-expand');

                    if (\$headers.hasClass('to-expand')) {
                        \$headers.removeClass('to-expand');
                        \$headers.addClass('to-shrink');
                        \$label.text('Shrink');
                    } else {
                        \$headers.removeClass('to-shrink');
                        \$headers.addClass('to-expand');
                        \$label.text('Expand');
                    }

                    e.preventDefault();
                });


                // sets the correct parameter type on load
                \$(document).on('api_resource_content:load', function(e) {
                    \$(e.target).find('.pane.sandbox .tuple_type').each(function() {
                        setParameterType(\$(this));
                    });
                });


                // handles parameter type change
                \$(document).on('change', '.pane.sandbox .tuple_type', function() {
                    setParameterType(\$(this),\$(this).val());
                });



                \$(document).on('click', '.pane.sandbox .add_parameter', function() {
                    var html = \$(this).parents('.pane').find('.parameters_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$(document).on('click', '.pane.sandbox .add_header', function() {
                    var html = \$(this).parents('.pane').find('.headers_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$(document).on('click', '.pane.sandbox .remove', function() {
                    \$(this).parent().remove();
                });

                \$(document).on('click', '.pane.sandbox .set-content-type', function(e) {
                    var html;
                    var \$element;
                    var \$headers = \$(this).parents('form').find('.headers');
                    var content_type = \$(this).prev('input.value').val();

                    e.preventDefault();

                    if (content_type.length === 0) {
                        return;
                    }

                    \$headers.find('input.key').each(function() {
                        if (\$(this).val().toLowerCase().trim() === 'content-type') {
                            \$element = \$(this).parents('p');
                            return false;
                        }
                    });

                    if (typeof \$element === 'undefined') {
                        html = \$(this).parents('.pane').find('.tuple_template').html();

                        \$element = \$headers.find('legend').after(html).next('p');
                    }

                    \$element.find('input.key').val('Content-Type');
                    \$element.find('input.value').val(content_type);

                });

                ";
            // line 834
            if (((isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 834, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 834, $this->source); })()), "delivery", [], "any", false, false, false, 834) == "http"))) {
                // line 835
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 835, $this->source); })()), "delivery", [], "any", false, false, false, 835), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 836
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 836, $this->source); })()), "name", [], "any", false, false, false, 836), "html", null, true);
                echo "';
                var authentication_type = '";
                // line 837
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 837, $this->source); })()), "type", [], "any", false, false, false, 837), "html", null, true);
                echo "';
                ";
            } elseif ((            // line 838
(isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 838, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 838, $this->source); })()), "delivery", [], "any", false, false, false, 838) == "query"))) {
                // line 839
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 839, $this->source); })()), "delivery", [], "any", false, false, false, 839), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 840
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 840, $this->source); })()), "name", [], "any", false, false, false, 840), "html", null, true);
                echo "';
                var search = window.location.search;
                var api_key_start = search.indexOf(api_key_parameter) + api_key_parameter.length + 1;

                if (api_key_start > 0 ) {
                    var api_key_end = search.indexOf('&', api_key_start);

                    var api_key = -1 == api_key_end
                        ? search.substr(api_key_start)
                        : search.substring(api_key_start, api_key_end);

                    \$('#api_key').val(api_key);
                }
                ";
            } elseif ((            // line 853
(isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 853, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 853, $this->source); })()), "delivery", [], "any", false, false, false, 853) == "header"))) {
                // line 854
                echo "                var authentication_delivery = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 854, $this->source); })()), "delivery", [], "any", false, false, false, 854), "html", null, true);
                echo "';
                var api_key_parameter = '";
                // line 855
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["authentication"]) || array_key_exists("authentication", $context) ? $context["authentication"] : (function () { throw new RuntimeError('Variable "authentication" does not exist.', 855, $this->source); })()), "name", [], "any", false, false, false, 855), "html", null, true);
                echo "';
                ";
            } else {
                // line 857
                echo "                var authentication_delivery = false;
                ";
            }
            // line 859
            echo "            ";
        }
        // line 860
        echo "        </script>
    </body>
</html>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 56));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroApi/ApiDoc/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1075 => 56,  1059 => 860,  1056 => 859,  1052 => 857,  1047 => 855,  1042 => 854,  1040 => 853,  1024 => 840,  1019 => 839,  1017 => 838,  1013 => 837,  1009 => 836,  1004 => 835,  1002 => 834,  811 => 645,  805 => 641,  803 => 640,  797 => 638,  791 => 636,  789 => 635,  654 => 503,  642 => 494,  576 => 431,  331 => 188,  329 => 187,  269 => 129,  265 => 127,  263 => 126,  225 => 91,  221 => 90,  188 => 60,  183 => 57,  181 => 56,  177 => 54,  175 => 53,  171 => 51,  167 => 49,  162 => 46,  158 => 44,  156 => 43,  153 => 42,  149 => 40,  147 => 39,  143 => 37,  140 => 36,  138 => 35,  135 => 34,  132 => 33,  119 => 31,  115 => 30,  111 => 28,  108 => 27,  104 => 25,  97 => 24,  91 => 23,  87 => 21,  85 => 20,  82 => 19,  80 => 18,  74 => 17,  66 => 12,  60 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        <meta charset=\"utf-8\" />
        <!-- Always force latest IE rendering engine (even in intranet) and Chrome Frame -->
        <meta content=\"IE=edge,chrome=1\" http-equiv=\"X-UA-Compatible\" />
        <title>{{ apiName }}</title>
        <style type=\"text/css\">
            {{ css|raw }}
        </style>
        <script>
            {{ js|raw }}
        </script>
    </head>
    <body>
        <div id=\"header\">
            <a href=\"{{ path(rootRoute) }}\"><h1>{{ apiName }}</h1></a>
            {% if enableSandbox %}
                <div id=\"sandbox_configuration\">
                    {% if bodyFormats|length > 0 %}
                    body format:
                    <select id=\"body_format\">
                        {% if 'form' in bodyFormats %}<option value=\"form\"{{ defaultBodyFormat == 'form' ? ' selected' : '' }}>Form Data</option>{% endif %}
                        {% if 'json' in bodyFormats %}<option value=\"json\"{{ defaultBodyFormat == 'json' ? ' selected' : '' }}>JSON</option>{% endif %}
                    </select>
                    {% endif %}
                    {% if requestFormats|length > 0 %}
                    request format:
                    <select id=\"request_format\">
                    {% for format, header in requestFormats %}
                        <option value=\"{{ header }}\"{{ defaultRequestFormat == format ? ' selected' : '' }}>{{ format }}</option>
                    {% endfor %}
                    {% endif %}
                    </select>
                    {% if authentication %}
                        {% if authentication.delivery == 'http' and authentication.type == 'basic' %}
                            api login: <input type=\"text\" id=\"api_login\" value=\"\"/>
                            api password: <input type=\"text\" id=\"api_pass\" value=\"\"/>
                        {% elseif authentication.delivery in ['query', 'http', 'header'] %}
                            api key: <input type=\"text\" id=\"api_key\" value=\"\"/>
                        {% endif %}

                        {% if authentication.custom_endpoint %}
                            api endpoint: <input type=\"text\" id=\"api_endpoint\" value=\"\"/>
                        {% endif %}
                        <button id=\"save_api_auth\" type=\"button\">Save</button>
                        <button id=\"clear_api_auth\" type=\"button\">Clear</button>
                    {% endif %}
                </div>
            {% endif %}
            <br style=\"clear: both;\" />
        </div>
        {% include motdTemplate %}
        <div class=\"container\" id=\"resources_container\">
            <ul id=\"resources\">
                {% block content %}{% endblock %}
            </ul>
        </div>
        <p id=\"colophon\">
            Documentation auto-generated on {{ date }}
        </p>
        <script>

            var getHash = function() {
              return window.location.hash || '';
            };

            var setHash = function(hash) {
                window.location.hash = hash;
            };

            var clearHash = function() {
                var scrollTop, scrollLeft;

                if(typeof history === 'object' && typeof history.pushState === 'function') {
                    history.replaceState('', document.title, window.location.pathname + window.location.search);
                } else {
                    scrollTop = document.body.scrollTop;
                    scrollLeft = document.body.scrollLeft;

                    setHash('');

                    document.body.scrollTop = scrollTop;
                    document.body.scrollLeft = scrollLeft;
                }
            };

            var showResourceContent = function (contentContainer, updateHash) {
                var toggler = contentContainer.prev(),
                    rootPath = '{{ path(rootRoute) }}',
                    apiType = window.location.pathname.substr(rootPath.length + 1) || '{{ defaultView }}',
                    resourceUrl = rootPath + '/' + apiType + '/' + toggler.data('href').substr(1);
                \$.ajax({
                    url: resourceUrl,
                    type: 'GET',
                    success: function(html) {
                        var newContentContainer = \$(html).children('.content');
                        contentContainer.replaceWith(newContentContainer);
                        newContentContainer.trigger('api_resource_content:load');
                        if (updateHash) {
                            setHash(toggler.data('href'));
                        }
                    },
                    error: function(xhr) {
                        contentContainer.text(
                            xhr.status === 404 ? 'Unknown API resource.' : 'The loading failed.'
                        );
                    }
                });
            };

            \$(window).load(function() {
                var id = getHash().substr(1).replace( /([:\\.\\[\\]\\{\\}|])/g, \"\\\\\$1\");
                var elem = \$('#' + id);
                if (elem.length) {
                    setTimeout(function() {
                        \$('body,html').scrollTop(elem.position().top);
                    });
                    elem.find('.toggler').click();
                    var section = elem.parents('.section').first();
                    if (section) {
                        section.addClass('active');
                        section.find('.section-list').slideDown('fast');
                    }
                }
                {% if enableSandbox %}
                    loadStoredAuthParams();
                {% endif %}
            });

            \$('.toggler').click(function(event) {
                var toggler = \$(this),
                    contentContainer = toggler.next(),
                    isVisible = contentContainer.is(':visible');

                contentContainer.slideToggle('fast');
                if (contentContainer.data('state') !== 'collapsed') {
                    if (isVisible) {
                        clearHash();
                    } else {
                        setHash(toggler.data('href'));
                    }
                } else if (!isVisible) {
                    showResourceContent(contentContainer, true);
                }

                return false;
            });

            \$('.action-show-hide, .section > h1').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (section.hasClass('active')) {
                    section.removeClass('active');
                    section.find('.section-list').slideUp('fast');
                } else {
                    section.addClass('active');
                    section.find('.section-list').slideDown('fast');
                }

            });

            \$('.action-list').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                section.find('.section-list').slideDown('fast');
                section.find('.operation > .content').slideUp('fast');
            });

            \$('.action-expand').on('click', function(){
                var section = \$(this).parents('.section').first();
                if (!section.hasClass('active')) {
                    section.addClass('active');
                }
                \$(section).find('ul').slideDown('fast');
                \$(section).find('.operation > .content').each(function(){
                    var contentContainer = \$(this),
                        isVisible = contentContainer.is(':visible');
                    contentContainer.slideDown('fast');
                    if (!isVisible && contentContainer.data('state') === 'collapsed') {
                        showResourceContent(contentContainer, false);
                    }
                });
            });

            {% if enableSandbox %}
                var getStoredValue, storeValue, deleteStoredValue;
                var apiAuthKeys = ['api_key', 'api_login', 'api_pass', 'api_endpoint'];

                if ('localStorage' in window) {
                    var buildKey = function (key) {
                        return 'nelmio_' + key;
                    }

                    getStoredValue = function (key) {
                        return localStorage.getItem(buildKey(key));
                    }

                    storeValue = function (key, value) {
                        localStorage.setItem(buildKey(key), value);
                    }

                    deleteStoredValue = function (key) {
                        localStorage.removeItem(buildKey(key));
                    }
                } else {
                    getStoredValue = storeValue = deleteStoredValue = function (){};
                }

                var loadStoredAuthParams = function() {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val(getStoredValue(value));
                        }
                    });
                }

                var setParameterType = function (\$context,setType) {
                    // no 2nd argument, use default from parameters
                    if (typeof setType == \"undefined\") {
                        setType = \$context.parent().attr(\"data-dataType\");
                        \$context.val(setType);
                    }

                    \$context.parent().find('.value').remove();
                    var placeholder = \"\";
                    if (\$context.parent().attr(\"data-dataType\") != \"\" && typeof \$context.parent().attr(\"data-dataType\") != \"undefined\") {
                        placeholder += \"[\" + \$context.parent().attr(\"data-dataType\") + \"] \";
                    }
                    if (\$context.parent().attr(\"data-format\") != \"\" && typeof \$context.parent().attr(\"data-format\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-format\");
                    }
                    if (\$context.parent().attr(\"data-description\") != \"\" && typeof \$context.parent().attr(\"data-description\") != \"undefined\") {
                        placeholder += \$context.parent().attr(\"data-description\");
                    } else {
                        placeholder += \"Value\";
                    }

                    switch(setType) {
                        case \"boolean\":
                            \$('<select class=\"value\"><option value=\"\"></option><option value=\"1\">True</option><option value=\"0\">False</option></select>').insertAfter(\$context);
                            break;
                        case \"file\":
                            \$('<input type=\"file\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                            break;
                        case \"textarea\":
                            \$('<textarea class=\"value\" placeholder=\"'+ placeholder +'\" />').insertAfter(\$context);
                            break;
                        default:
                            \$('<input type=\"text\" class=\"value\" placeholder=\"'+ placeholder +'\">').insertAfter(\$context);
                    }
                };

                var toggleButtonText = function (\$btn) {
                    if (\$btn.text() === 'Default') {
                        \$btn.text('Raw');
                    } else {
                        \$btn.text('Default');
                    }
                };

                var renderRawBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-raw');

                    \$container.addClass('prettyprinted');
                    \$container.html(\$('<div/>').text(rawData).html());

                    \$btn.removeClass('to-raw');
                    \$btn.addClass('to-prettify');

                    toggleButtonText(\$btn);
                };

                var renderPrettifiedBody = function (\$container) {
                    var rawData, \$btn;

                    rawData = \$container.data('raw-response');
                    \$btn = \$container.parents('.pane').find('.to-prettify');

                    \$container.removeClass('prettyprinted');
                    \$container.html(attachCollapseMarker(prettifyResponse(rawData)));
                    prettyPrint && prettyPrint();

                    \$btn.removeClass('to-prettify');
                    \$btn.addClass('to-raw');

                    toggleButtonText(\$btn);
                };

                var unflattenDict = function (body) {
                    var found = true;
                    while(found) {
                        found = false;

                        for (var key in body) {
                            var okey;
                            var value = body[key];
                            var dictMatch = key.match(/^(.+)\\[([^\\]]+)\\]\$/);

                            if(dictMatch) {
                                found = true;
                                okey = dictMatch[1];
                                var subkey = dictMatch[2];
                                body[okey] = body[okey] || {};
                                body[okey][subkey] = value;
                                delete body[key];
                            } else {
                                body[key] = value;
                            }
                        }
                    }
                    return body;
                };

                \$('#save_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        var elm = \$('#' + value);
                        if (elm.length) {
                            storeValue(value, elm.val());
                        }
                    });
                });

                \$('#clear_api_auth').click(function(event) {
                    \$.each(apiAuthKeys, function(_, value) {
                        deleteStoredValue(value);
                        var elm = \$('#' + value);
                        if (elm.length) {
                            elm.val('');
                        }
                    });
                });

                \$(document).on('click', '.tabs li', function() {
                    var contentGroup = \$(this).parents('.content');

                    \$('.pane.selected', contentGroup).removeClass('selected');
                    \$('.pane.' + \$(this).data('pane'), contentGroup).addClass('selected');

                    \$('li', \$(this).parent()).removeClass('selected');
                    \$(this).addClass('selected');
                });

                var getJsonCollapseHtml = function(sectionOpenCharacter) {
                    var \$toggler = \$('<span>').addClass('json-collapse-section').
                            attr('data-section-open-character', sectionOpenCharacter).
                            append(\$('<span>').addClass('json-collapse-marker')
                                    .html('&#9663;')
                    ).append(sectionOpenCharacter);
                    return \$('<div>').append(\$toggler).html();
                };

                var attachCollapseMarker = function (prettifiedJsonString) {
                    prettifiedJsonString = prettifiedJsonString.replace(/(\\{|\\[)\\n/g, function(match, sectionOpenCharacter) {
                        return getJsonCollapseHtml(sectionOpenCharacter) + '<span class=\"json-collapse-content\">\\n';
                    });
                    return prettifiedJsonString.replace(/([^\\[][\\}\\]],?)\\n/g, '\$1</span>\\n');
                };

                var prettifyResponse = function(text) {
                    try {
                        var data = typeof text === 'string' ? JSON.parse(text) : text;
                        text = JSON.stringify(data, undefined, '  ');
                    } catch (err) {
                    }

                    // HTML encode the result
                    return \$('<div>').text(text).html();
                };

                var displayFinalUrl = function(xhr, method, url, data, container) {
                    container.text(method + ' ' + getFinalUrl(method, url, data));
                };

                var displayRequestBody = function(method, data, container, header) {
                    if ('GET' != method && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }

                        container.text(data);
                        container.show();
                        header.show();
                    } else {
                        container.hide();
                        header.hide();
                    }
                };

                var displayProfilerUrl = function(xhr, link, container) {
                    var profilerUrl = xhr.getResponseHeader('X-Debug-Token-Link');
                    if (profilerUrl) {
                        link.attr('href', profilerUrl);
                        container.show();
                    } else {
                        link.attr('href', '');
                        container.hide();
                    }
                };

                var displayResponseData = function(xhr, container) {
                    var data = xhr.responseText;

                    container.data('raw-response', data);

                    renderPrettifiedBody(container);

                    container.parents('.pane').find('.to-prettify').text('Raw');
                    container.parents('.pane').find('.to-raw').text('Raw');
                };

                var displayResponseHeaders = function(xhr, container) {
                    var text = xhr.status + ' ' + xhr.statusText + \"\\n\\n\";
                    text += xhr.getAllResponseHeaders();

                    container.text(text);
                };

                var displayCurl = function(method, url, headers, data, result_container) {
                    var escapeShell = function(param) {
                        param = \"\" + param;
                        return '\"' + param.replace(/([\"\$`\\\\])/g,'\\\\\$1') + '\"';
                    };

                    if (url.startsWith('/')) {
                        url = '{{ app.request.schemeAndHttpHost|default('') }}' + url;
                    }
                    url = getFinalUrl(method, url, data);

                    var command = \"curl\";
                    command += \" -X \" + escapeShell(method);

                    if (method != \"GET\" && !jQuery.isEmptyObject(data) && data !== \"\" && data !== undefined) {
                        if (jQuery.type(data) !== 'string') {
                            data = decodeURIComponent(jQuery.param(data));
                        }
                        command += \" -d \" + escapeShell(data);
                    }

                    for (headerKey in headers) {
                        if (headers.hasOwnProperty(headerKey)) {
                            command += \" -H \" + escapeShell(headerKey + ': ' + headers[headerKey]);
                        }
                    }

                    command += \" \" + escapeShell(url);

                    result_container.text(command);
                };

                var getFinalUrl = function(method, url, data) {
                    if ('GET' == method && !jQuery.isEmptyObject(data)) {
                        var separator = url.indexOf('?') >= 0 ? '&' : '?';
                        url = url + separator + decodeURIComponent(jQuery.param(data));
                    }

                    return url;
                };

                var displayResponse = function(xhr, method, url, headers, data, result_container) {
                    displayFinalUrl(xhr, method, url, data, \$('.url', result_container));
                    displayRequestBody(method, data, \$('.request-body', result_container), \$('.request-body-header', result_container));
                    displayProfilerUrl(xhr, \$('.profiler-link', result_container), \$('.profiler', result_container));
                    displayResponseData(xhr, \$('.response', result_container));
                    displayResponseHeaders(xhr, \$('.headers', result_container));
                    displayCurl(method, url, headers, data, \$('.curl-command', result_container));

                    result_container.show();
                };

                \$(document).on('submit', '.pane.sandbox form', function() {
                    var url = \$(this).attr('action'),
                        method = \$('[name=\"header_method\"]', this).val(),
                        self = this,
                        params = {},
                        filters = {},
                        formData = new FormData(),
                        doubledParams = {},
                        doubledFilters = {},
                        headers = {},
                        content = \$(this).find('textarea.content').val(),
                        result_container = \$('.result', \$(this).parent());

                    if (method === 'ANY') {
                        method = 'POST';
                    }

                    // set requestFormat
                    var requestFormatMethod = '{{ requestFormatMethod }}';
                    if (requestFormatMethod == 'format_param') {
                        params['_format'] = \$('#request_format option:selected').text();
                        formData.append('_format',\$('#request_format option:selected').text());
                    } else if (requestFormatMethod == 'accept_header') {
                        headers['Accept'] = \$('#request_format').val();
                    }

                    // set default bodyFormat
                    var bodyFormat = \$('#body_format').val() || '{{ defaultBodyFormat }}';

                    var hasFileTypes = false;
                    \$('.parameters .tuple_type', \$(this)).each(function() {
                        if (\$(this).val() == 'file') {
                            hasFileTypes = true;
                        }
                    });

                    if (hasFileTypes && method != 'POST') {
                        alert(\"Sorry, you can only submit files via POST.\");
                        return false;
                    }

                    if (hasFileTypes && bodyFormat != 'form') {
                        alert(\"Body Format must be set to 'Form Data' when utilizing file upload type parameters.\\nYour current bodyFormat is '\" + bodyFormat + \"'. Change your BodyFormat or do not use file type\\nparameters.\");
                        return false;
                    }

                    if (hasFileTypes) {
                        // retrieve all the parameters to send for file upload
                        \$('.parameters .tuple', \$(this)).each(function() {
                            var key, value;

                            key = \$('.key', \$(this)).val();
                            if (\$('.value', \$(this)).attr('type') === 'file' ) {
                                value = \$('.value', \$(this)).prop('files')[0];
                                if(!value) {
                                    value = new File([], '');
                                }
                            } else {
                                value = \$('.value', \$(this)).val();
                            }

                            if (value) {
                                formData.append(key,value);
                            }
                        });
                    }


                    // retrieve all the parameters to send
                    \$('.parameters .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // convert boolean values to boolean
                            if ('json' === bodyFormat && 'boolean' === \$('.tuple_type', \$(this)).val()) {
                                value = '1' === value;
                            }

                            // temporary save all additional/doubled parameters
                            if (key in params) {
                                doubledParams[key] = value;
                            } else {
                                params[key] = value;
                            }
                        }
                    });




                    // retrieve all the filters to send
                    \$('.parameters .tuple.filter', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            // temporary save all additional/doubled parameters
                            if (key in filters) {
                                doubledFilters[key] = value;
                            } else {
                                filters[key] = value;
                            }
                        }
                    });




                    // retrieve the additional headers to send
                    \$('.headers .tuple', \$(this)).each(function() {
                        var key, value;

                        key = \$('.key', \$(this)).val();
                        value = \$('.value', \$(this)).val();

                        if (value) {
                            headers[key] = value;
                        }

                    });

                    // set default content type
                    if(!('Content-Type' in headers) && -1 !== \$.inArray(method, ['POST', 'PATCH', 'PUT', 'DELETE'])) {
                        if ('form' === bodyFormat) {
                            headers['Content-Type'] = 'application/x-www-form-urlencoded';
                        } else {
                            headers['Content-Type'] = 'application/json';
                        }
                    }

                    // fix parameters in URL
                    for (var key in \$.extend({}, params)) {
                        if (url.indexOf('{' + key + '}') !== -1) {
                            url = url.replace('{' + key + '}', params[key]);
                            delete params[key];
                        }
                    };

                    // merge additional params back to real params object
                    if (!\$.isEmptyObject(doubledParams)) {
                        \$.extend(params, doubledParams);
                    }

                    // disable all the fiels and buttons
                    \$('input, button', \$(this)).attr('disabled', 'disabled');

                    // append the query authentication
                    var api_key_val = \$('#api_key').val();
                    if (authentication_delivery == 'query' && api_key_val.length>0) {
                        url += url.indexOf('?') > 0 ? '&' : '?';
                        url += api_key_parameter + '=' + api_key_val;
                    }

                    // prepare the api enpoint
                    {% if endpoint == '' and app.request is not null and app.request.host -%}
                    var endpoint = '{{ app.request.getBaseUrl() }}';
                    {% else -%}
                    var endpoint = '{{ endpoint }}';
                    {% endif -%}
                    {% if authentication and authentication.custom_endpoint %}
                    if (\$('#api_endpoint') && typeof(\$('#api_endpoint').val()) != 'undefined') {
                        endpoint = \$('#api_endpoint').val();
                    }
                    {% endif %}

                    //add filters as GET params and remove them from params
                    if(method != 'GET'){
                        for (var filterKey in \$.extend({}, filters)){
                            url += url.indexOf('?') > 0 ? '&' : '?';
                            url += filterKey + '=' + filters[filterKey];

                            if (params.hasOwnProperty(filterKey)){
                                delete(params[filterKey]);
                            }
                        }
                    }

                    // prepare final parameters
                    var body = {};
                    if(bodyFormat == 'json' && method != 'GET') {
                        body = unflattenDict(params);
                        body = JSON.stringify(body);
                    } else {
                        body = params;
                    }
                    var data = content.length ? content : body;
                    var ajaxOptions = {
                        url: (url.indexOf('http')!=0?endpoint:'') + url,
                        xhrFields: { withCredentials: true },
                        type: method,
                        data: data,
                        headers: headers,
                        crossDomain: true,
                        beforeSend: function (xhr) {
                            if (authentication_delivery) {
                                var value;

                                if ('http' == authentication_delivery) {
                                    if ('basic' == authentication_type) {
                                        value = 'Basic ' + btoa(\$('#api_login').val() + ':' + \$('#api_pass').val());
                                    } else if ('bearer' == authentication_type) {
                                        value = 'Bearer ' + \$('#api_key').val();
                                    }
                                } else if ('header' == authentication_delivery) {
                                    value = \$('#api_key').val();
                                }

                                xhr.setRequestHeader(api_key_parameter, value);
                            }
                        },
                        complete: function(xhr) {
                            displayResponse(xhr, method, url, headers, data, result_container);

                            // and enable them back
                            \$('input:not(.content-type), button', \$(self)).removeAttr('disabled');
                        }
                    };

                    // overrides body format to send data properly
                    if (hasFileTypes) {
                        ajaxOptions.data = formData;
                        ajaxOptions.processData = false;
                        ajaxOptions.contentType = false;
                        delete(headers['Content-Type']);
                    }

                    // and trigger the API call
                    \$.ajax(ajaxOptions);

                    return false;
                });

                \$(document).on('click', '.operations .operation > .heading', function(e) {
                    if (history.pushState) {
                        history.pushState(null, null, \$(this).data('href'));
                        e.preventDefault();
                    }
                });

                \$(document).on('click', '.json-collapse-section', function() {
                    var openChar = \$(this).data('section-open-character'),
                            closingChar = (openChar == '{' ? '}' : ']');
                    if (\$(this).next('.json-collapse-content').is(':visible')) {
                        \$(this).html('&oplus;' +  openChar + '...' + closingChar);
                    } else {
                        \$(this).html('&#9663;' + \$(this).data('section-open-character'));
                    }
                    \$(this).next('.json-collapse-content').toggle();
                });

                \$(document).on('copy', '.prettyprinted', function () {
                    var \$toggleMarkers = \$(this).find('.json-collapse-marker');
                    \$toggleMarkers.hide();
                    setTimeout(function () {
                        \$toggleMarkers.show();
                    }, 100);
                });

                \$(document).on('click', '.pane.sandbox .to-raw', function(e) {
                    renderRawBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$(document).on('click', '.pane.sandbox .to-prettify', function(e) {
                    renderPrettifiedBody(\$(this).parents('.pane').find('.response'));

                    e.preventDefault();
                });

                \$(document).on('click', '.pane.sandbox .to-expand, .to-shrink', function(e) {
                    var \$headers = \$(this).parents('.result').find('.headers');
                    var \$label = \$(this).parents('.result').find('a.to-expand');

                    if (\$headers.hasClass('to-expand')) {
                        \$headers.removeClass('to-expand');
                        \$headers.addClass('to-shrink');
                        \$label.text('Shrink');
                    } else {
                        \$headers.removeClass('to-shrink');
                        \$headers.addClass('to-expand');
                        \$label.text('Expand');
                    }

                    e.preventDefault();
                });


                // sets the correct parameter type on load
                \$(document).on('api_resource_content:load', function(e) {
                    \$(e.target).find('.pane.sandbox .tuple_type').each(function() {
                        setParameterType(\$(this));
                    });
                });


                // handles parameter type change
                \$(document).on('change', '.pane.sandbox .tuple_type', function() {
                    setParameterType(\$(this),\$(this).val());
                });



                \$(document).on('click', '.pane.sandbox .add_parameter', function() {
                    var html = \$(this).parents('.pane').find('.parameters_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$(document).on('click', '.pane.sandbox .add_header', function() {
                    var html = \$(this).parents('.pane').find('.headers_tuple_template').html();

                    \$(this).before(html);

                    return false;
                });

                \$(document).on('click', '.pane.sandbox .remove', function() {
                    \$(this).parent().remove();
                });

                \$(document).on('click', '.pane.sandbox .set-content-type', function(e) {
                    var html;
                    var \$element;
                    var \$headers = \$(this).parents('form').find('.headers');
                    var content_type = \$(this).prev('input.value').val();

                    e.preventDefault();

                    if (content_type.length === 0) {
                        return;
                    }

                    \$headers.find('input.key').each(function() {
                        if (\$(this).val().toLowerCase().trim() === 'content-type') {
                            \$element = \$(this).parents('p');
                            return false;
                        }
                    });

                    if (typeof \$element === 'undefined') {
                        html = \$(this).parents('.pane').find('.tuple_template').html();

                        \$element = \$headers.find('legend').after(html).next('p');
                    }

                    \$element.find('input.key').val('Content-Type');
                    \$element.find('input.value').val(content_type);

                });

                {% if authentication and authentication.delivery == 'http' %}
                var authentication_delivery = '{{ authentication.delivery }}';
                var api_key_parameter = '{{ authentication.name }}';
                var authentication_type = '{{ authentication.type }}';
                {% elseif authentication and authentication.delivery == 'query' %}
                var authentication_delivery = '{{ authentication.delivery }}';
                var api_key_parameter = '{{ authentication.name }}';
                var search = window.location.search;
                var api_key_start = search.indexOf(api_key_parameter) + api_key_parameter.length + 1;

                if (api_key_start > 0 ) {
                    var api_key_end = search.indexOf('&', api_key_start);

                    var api_key = -1 == api_key_end
                        ? search.substr(api_key_start)
                        : search.substring(api_key_start, api_key_end);

                    \$('#api_key').val(api_key);
                }
                {% elseif authentication and authentication.delivery == 'header' %}
                var authentication_delivery = '{{ authentication.delivery }}';
                var api_key_parameter = '{{ authentication.name }}';
                {% else %}
                var authentication_delivery = false;
                {% endif %}
            {% endif %}
        </script>
    </body>
</html>
", "@OroApi/ApiDoc/layout.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ApiBundle/Resources/views/ApiDoc/layout.html.twig");
    }
}
