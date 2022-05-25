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

/* @OroApi/ApiDoc/motd.html.twig */
class __TwigTemplate_7d7b95901302db2b3b1faf502a296053 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroApi/ApiDoc/motd.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/motd.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroApi/ApiDoc/motd.html.twig"));

        // line 1
        $context["rootPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["rootRoute"]) || array_key_exists("rootRoute", $context) ? $context["rootRoute"] : (function () { throw new RuntimeError('Variable "rootRoute" does not exist.', 1, $this->source); })()));
        // line 2
        echo "<style type=\"text/css\">
    #summary { display: none; }
    #api_type { float: left; font-size: 1.2em; padding: 12px 24px; }
    #api_type a.active { font-weight: bold; color: #3d5b00; }
    .authentication-warning svg { vertical-align: middle; padding-right: 5px; }
    div.motd { padding-top: 10px; }
    div.motd div.documentation { padding: 3px 0; overflow: hidden; }
    div.motd div.documentation a { text-decoration: none; }
    div.motd div.documentation a.main { font-size: 1.2em; }
    div.motd div.documentation p { padding: 10px 0 0 0; }
    div.motd div.documentation ul { padding-left: 10px; list-style-type: disc; list-style-position: inside; }
    #sandbox_configuration { padding-top: 16px; padding-bottom: 5px; }
    #sandbox_configuration .account-info { position: absolute; top: 7px; right: 16px; }
    #sandbox_configuration .account-info em { padding-left: 1em; color: #2c4300; }
    #sandbox_configuration .account-info a { padding-left: 2em; color: #2c4300; text-decoration: underline; }
</style>
<script>
    handleResourceLinks = function (\$el, apiPrefix) {
        var value = \$el.text(),
            prefix = '', suffix = '', links = [], elements, i, j, resourceId;
        i = value.indexOf(' (');
        if (-1 !== i) {
            j = value.indexOf(')', i);
            if (-1 !== j) {
                prefix = value.substr(0, i + 2);
                suffix = value.substr(j);
            }
        } else if (0 === value.indexOf('array of ')) {
            prefix = 'array of ';
        }
        if (value && value.substr(prefix.length, 2) !== '<a') {
            \$el.text('');
            elements = value.substr(prefix.length, value.length - prefix.length - suffix.length).split(',');
            for (i = 0; i < elements.length; i++) {
                resourceId = getResourceId('get-' + apiPrefix + '-api-' + elements[i].trim());
                if (resourceId) {
                    links.push('<a href=\"#' + resourceId
                        + '\" onclick=\"return gotoResource(\\'' + resourceId + '\\');\">'
                        + elements[i] + '</a>');
                } else {
                    links.push(elements[i]);
                }
            }
            \$el.append(prefix + links.join(', ') + suffix);
        }
    };
    getResourceId = function (listResourceId) {
        var itemResourceId = listResourceId + '-{id}';
        if (\$('#' + escapeSelector(itemResourceId)).length) {
            return itemResourceId;
        }
        if (\$('#' + escapeSelector(listResourceId)).length) {
            return listResourceId;
        }
        return null;
    };
    gotoResource = function (resourceId) {
        var resourceId = escapeSelector(resourceId),
            \$section = \$('#' + resourceId).closest('.section'),
            \$toggler = \$('#' + resourceId + ' > .toggler');
        if (!\$section.hasClass('active')) {
            \$section.find('h1').trigger('click');
        }
        if (\$toggler.next().is(':visible')) {
            window.location.hash = \$toggler.data('href');
        } else {
            \$toggler.trigger('click');
        }

        return false;
    };
    escapeSelector = function (val) {
        return val.replace(/(:|\\.|\\[|\\]|\\{|\\}|,)/g, \"\\\\\$1\");
    };
    getCookieValue = function(name) {
        var value = '; ' + document.cookie;
        var parts = value.split('; ' + name + '=');
        if (parts.length === 2) {
            return parts.pop().split(';').shift();
        }
        return '';
    };
    \$(function() {
        var organizations = ";
        // line 85
        echo json_encode((isset($context["organizations"]) || array_key_exists("organizations", $context) ? $context["organizations"] : (function () { throw new RuntimeError('Variable "organizations" does not exist.', 85, $this->source); })()));
        echo ",
            organization = ";
        // line 86
        echo json_encode((isset($context["organization"]) || array_key_exists("organization", $context) ? $context["organization"] : (function () { throw new RuntimeError('Variable "organization" does not exist.', 86, $this->source); })()));
        echo ",
            userName = ";
        // line 87
        echo json_encode((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 87, $this->source); })()));
        echo ",
            apiKey = ";
        // line 88
        echo json_encode((isset($context["apiKey"]) || array_key_exists("apiKey", $context) ? $context["apiKey"] : (function () { throw new RuntimeError('Variable "apiKey" does not exist.', 88, $this->source); })()));
        echo ",
            apiKeyGenerationHint = ";
        // line 89
        echo json_encode(((array_key_exists("apiKeyGenerationHint", $context)) ? (_twig_default_filter((isset($context["apiKeyGenerationHint"]) || array_key_exists("apiKeyGenerationHint", $context) ? $context["apiKeyGenerationHint"] : (function () { throw new RuntimeError('Variable "apiKeyGenerationHint" does not exist.', 89, $this->source); })()), "")) : ("")));
        echo ",
            switchOrganizationUrl = ";
        // line 90
        echo (((isset($context["switchOrganizationRoute"]) || array_key_exists("switchOrganizationRoute", $context) ? $context["switchOrganizationRoute"] : (function () { throw new RuntimeError('Variable "switchOrganizationRoute" does not exist.', 90, $this->source); })())) ? (json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["switchOrganizationRoute"]) || array_key_exists("switchOrganizationRoute", $context) ? $context["switchOrganizationRoute"] : (function () { throw new RuntimeError('Variable "switchOrganizationRoute" does not exist.', 90, $this->source); })())))) : ("null"));
        echo ",
            loginUrl = ";
        // line 91
        echo (((isset($context["loginRoute"]) || array_key_exists("loginRoute", $context) ? $context["loginRoute"] : (function () { throw new RuntimeError('Variable "loginRoute" does not exist.', 91, $this->source); })())) ? (json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["loginRoute"]) || array_key_exists("loginRoute", $context) ? $context["loginRoute"] : (function () { throw new RuntimeError('Variable "loginRoute" does not exist.', 91, $this->source); })())))) : ("null"));
        echo ",
            logoutUrl = ";
        // line 92
        echo (((isset($context["logoutRoute"]) || array_key_exists("logoutRoute", $context) ? $context["logoutRoute"] : (function () { throw new RuntimeError('Variable "logoutRoute" does not exist.', 92, $this->source); })())) ? (json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["logoutRoute"]) || array_key_exists("logoutRoute", $context) ? $context["logoutRoute"] : (function () { throw new RuntimeError('Variable "logoutRoute" does not exist.', 92, $this->source); })())))) : ("null"));
        echo ",
            sessionAllowed = ";
        // line 93
        echo json_encode((isset($context["hasSecurityToken"]) || array_key_exists("hasSecurityToken", $context) ? $context["hasSecurityToken"] : (function () { throw new RuntimeError('Variable "hasSecurityToken" does not exist.', 93, $this->source); })()));
        echo ",
            wsseAllowed = userName && apiKey,
            serverTime = ";
        // line 95
        echo json_encode(twig_date_format_filter($this->env, "now", "c", "UTC"));
        echo ",
            clientTime = new Date(),
            serverTimeOffset = Date.parse(serverTime) - clientTime,
            \$motd = \$('.motd').first(),
            \$apiDocLink = \$('#header a').first(),
            apiActions = ";
        // line 100
        echo json_encode(((array_key_exists("actions", $context)) ? (_twig_default_filter((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 100, $this->source); })()), [])) : ([])));
        echo ",
            apiType = window.location.pathname.substr('";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["rootPath"]) || array_key_exists("rootPath", $context) ? $context["rootPath"] : (function () { throw new RuntimeError('Variable "rootPath" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "'.length + 1) || '";
        echo twig_escape_filter($this->env, (isset($context["defaultView"]) || array_key_exists("defaultView", $context) ? $context["defaultView"] : (function () { throw new RuntimeError('Variable "defaultView" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "',
            apiPrefix = '',
            operatorMap = {'eq': '=', 'neq': '!=', 'gt': '>', 'lt': '<', 'gte': '>=', 'lte': '<='},
            escapeHtmlAttribute = function (val) {
                return val.replace(/\"/g,'&quot;');
            },
            addHeader = function (\$headers, headerKey, headerValue) {
                var needsHeader = true,
                    emptyHeader = null;
                \$('.tuple', \$headers).each(function (index, header) {
                    if (\$('input.key:text[value=\"' + headerKey + '\"]', header).length) {
                        needsHeader = false;
                    } else if (!emptyHeader
                        && \$('input.key:text[value=]', header).length
                        && \$('input.value:text[value=]', header).length
                    ) {
                        emptyHeader = header;
                    }
                });
                if (needsHeader) {
                    if (emptyHeader) {
                        fillHeader(emptyHeader, headerKey, headerValue);
                    } else {
                        \$('button.add_header', \$headers).trigger('click');
                        fillHeader(\$headers.find('.tuple:not(.autogenerated-header):last'), headerKey, headerValue);
                    }
                }
            },
            removeHeader = function (\$headers, headerKey) {
                \$('input.key:text[value=\"' + headerKey + '\"]', \$headers).closest('.tuple').remove();
            },
            getHeaderValue = function (\$headers, headerKey) {
                return \$('input.key:text[value=\"' + headerKey + '\"]', \$headers)
                    .closest('.tuple')
                    .find('input.value')
                    .val();
            },
            fillHeader = function (header, headerKey, headerValue) {
                \$('input.key', header).val(headerKey);
                \$('input.value', header).val(headerValue);
            },
            preSubmitSandboxForm = function () {
                var authType = \$('#authentication_type option:selected').val(),
                    \$headers = \$('.headers', this);

                /**
                 * Remove auto-generated headers
                 */
                \$('.autogenerated-header', this).remove();

                /**
                 * Add WSSE authentication related headers
                 */
                if (authType === 'wsse') {
                    \$headers.append(
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"Authorization\">' +
                        '<input type=\"hidden\" class=\"value authorization-header\" placeholder=\"Value\">' +
                        '</div>' +
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-WSSE\">' +
                        '<input type=\"hidden\" class=\"value x-wsse-header\" placeholder=\"Value\">' +
                        '</div>'
                    );
                    \$('input.authorization-header', this).val('WSSE profile=\"UsernameToken\"');
                    \$('input.x-wsse-header', this).val(wsseHeader(userName, apiKey, serverTimeOffset));
                }

                /**
                 * Add Session authentication related headers
                 */
                if (authType === 'session') {
                    \$headers.append(
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-Requested-With\">' +
                        '<input type=\"hidden\" class=\"value\" placeholder=\"Value\" value=\"XMLHttpRequest\">' +
                        '</div>' +
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-CSRF-Header\">' +
                        '<input type=\"hidden\" class=\"value authorization-header\" placeholder=\"Value\">' +
                        '</div>'
                    );
                    \$('input.authorization-header', this).val(getCookieValue(";
        // line 183
        echo json_encode((isset($context["csrfCookieName"]) || array_key_exists("csrfCookieName", $context) ? $context["csrfCookieName"] : (function () { throw new RuntimeError('Variable "csrfCookieName" does not exist.', 183, $this->source); })()));
        echo "));
                }

                /**
                 * Add a header contains the id of current operation
                 * It will be used in ajaxPrefilter and ajaxComplete global handlers
                 */
                \$headers.append(
                    '<div class=\"tuple autogenerated-header\">' +
                    '<input type=\"hidden\" class=\"key\" value=\"X-API-Sandbox-Operation-ID\">' +
                    '<input type=\"hidden\" class=\"value operation-header\">' +
                    '</div>'
                );
                \$('input.operation-header', this).val(\$(this).closest('.operation').attr('id'));
            };

        var apiPrefixMatch = window.location.pathname.match(/\\/(\\w+)\\/api\\//i);
        if (apiPrefixMatch) {
            apiPrefix = '-' + apiPrefixMatch[1];
        }

        /**
         * Add the API view selector
         */
        ";
        // line 207
        if (((array_key_exists("views", $context) && (isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 207, $this->source); })())) && (twig_length_filter($this->env, (isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 207, $this->source); })())) > 1))) {
            // line 208
            echo "\$apiDocLink.after('<div id=\"api_type\">type:' +";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 209, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["view"]) {
                // line 210
                if (twig_get_attribute($this->env, $this->source, $context["view"], "sandbox", [], "any", false, false, false, 210)) {
                    // line 211
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 211)) {
                        echo "'&nbsp;' + ";
                    } else {
                        echo "'&nbsp;|&nbsp;' + ";
                    }
                    // line 212
                    echo "'<a href=\"' + '";
                    echo twig_escape_filter($this->env, ((isset($context["rootPath"]) || array_key_exists("rootPath", $context) ? $context["rootPath"] : (function () { throw new RuntimeError('Variable "rootPath" does not exist.', 212, $this->source); })()) . ((twig_get_attribute($this->env, $this->source, $context["view"], "default", [], "any", false, false, false, 212)) ? ("") : (("/" . $context["name"])))), "html", null, true);
                    echo "\"' +
                (apiType === '";
                    // line 213
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "' ? ' class=\"active\"' : '') + '>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "label", [], "any", false, false, false, 213), "html", null, true);
                    echo "</a>' +";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "'</div>');
        ";
        }
        // line 218
        echo "
        /**
         * Add the documentation link and the documentation block
         */
        ";
        // line 222
        if ((array_key_exists("views", $context) && (isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 222, $this->source); })()))) {
            // line 223
            echo "var documentationUrl = null, documentation = '';
        ";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 224, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["view"]) {
                // line 225
                if ((twig_get_attribute($this->env, $this->source, $context["view"], "sandbox", [], "any", false, false, false, 225) && twig_get_attribute($this->env, $this->source, $context["view"], "documentation_path", [], "any", false, false, false, 225))) {
                    // line 226
                    echo "if (apiType === '";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "') {
                documentationUrl = '";
                    // line 227
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["view"], "documentation_path", [], "any", false, false, false, 227)), "html", null, true);
                    echo "';
                ";
                    // line 228
                    if ((twig_get_attribute($this->env, $this->source, $context["view"], "documentation", [], "any", true, true, false, 228) && twig_get_attribute($this->env, $this->source, $context["view"], "documentation", [], "any", false, false, false, 228))) {
                        // line 229
                        echo "documentation = ";
                        echo json_encode($this->extensions['Oro\Bundle\ApiBundle\Twig\MarkdownExtension']->markdown(twig_get_attribute($this->env, $this->source, $context["view"], "documentation", [], "any", false, false, false, 229)));
                        echo ";";
                    }
                    // line 231
                    echo "}
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "if (documentationUrl) {
            documentation = '<a href=\"' + documentationUrl + '\" class=\"main\"'
                + ' target=\"_blank\">The documentation</a>' + documentation;
        }
        if (documentation) {
            \$motd.append('<div class=\"documentation\">' + documentation + '</div>');
        }
        ";
        }
        // line 242
        echo "
        /**
         * Add the authentication type selector
         */
        \$('#sandbox_configuration').prepend(
            (wsseAllowed || !apiKeyGenerationHint ? '' : '<span class=\"authentication-warning\"' +
            ' title=\"' + escapeHtmlAttribute(apiKeyGenerationHint) + '\"' +
            '>";
        // line 249
        echo twig_include($this->env, $context, "@OroApi/ApiDoc/warning.svg");
        echo "</span>') +
            'authentication: ' +
            '<select id=\"authentication_type\">' +
                '<option value=\"\"' + (!wsseAllowed && !sessionAllowed ? ' selected=\"\"' : '') + '>None</option>' +
                '<option value=\"wsse\"' + (wsseAllowed ? ' selected=\"\"' : ' disabled=\"\"') + '>WSSE</option>' +
                '<option value=\"session\"' + (!sessionAllowed ? ' disabled=\"\"' : (!wsseAllowed ? ' selected=\"\"' : '')) + '>Session</option>' +
            '</select>'
        );
        if (!wsseAllowed && !sessionAllowed) {
            \$('#header').css('background-color', '#f7fe2e');
        }

        var accountInfo = '', switchOrganizationAllowed = false;

        /**
         * Add organization selector
         */
        if (switchOrganizationUrl && Object.keys(organizations).length > 1) {
            accountInfo += 'organization: <select id=\"organization\">';
            for (var org in organizations) {
                accountInfo += '<option value=\"' + escapeHtmlAttribute(org)
                    + '\"' + (org == organization ? ' selected=\"\"' : '') + '>'
                    + \$('<div/>').text(organizations[org]).html() + '</option>';
            }
            accountInfo += '</select><span id=\"organization_loading\" style=\"display: none;\">Loading...</span>';
            switchOrganizationAllowed = true;
        } else if (organization && (organizations[organization] || false)) {
            accountInfo += 'organization: ' + organizations[organization];
        }

        /**
         * Add login and logout links
         */
        if (userName) {
            accountInfo += '<em>signed in as: ' + userName + '</em>';
            if (logoutUrl) {
                accountInfo += '<a href=\"' + logoutUrl + '?_api_view=' + apiType + '\">sign out</a>'
            }
        } else if (loginUrl) {
            accountInfo += '<a href=\"' + loginUrl + '?_api_view=' + apiType + '\">sign in</a>'
        }

        if (accountInfo) {
            \$('#sandbox_configuration').append('<span class=\"account-info\">' + accountInfo + '</span>');
            if (switchOrganizationAllowed) {
                \$('#organization').on('change', function() {
                    var \$organizationSelector = \$(this),
                        \$organizationLoader = \$('#organization_loading');
                    \$organizationSelector.hide();
                    \$organizationLoader.show();
                    \$.ajax({
                        url: switchOrganizationUrl + '/' + this.value + '.json',
                        type: 'GET',
                        headers: { 'X-CSRF-Header': getCookieValue(";
        // line 302
        echo json_encode((isset($context["csrfCookieName"]) || array_key_exists("csrfCookieName", $context) ? $context["csrfCookieName"] : (function () { throw new RuntimeError('Variable "csrfCookieName" does not exist.', 302, $this->source); })()));
        echo ") },
                        success: function() {
                            window.location.reload();
                        },
                        error: function() {
                            \$organizationSelector.val(organization);
                            \$organizationLoader.hide();
                            \$organizationSelector.show();
                            alert('Failed to switch the organization.');
                        }
                    });
                });
            }
        }

        /**
         * Add \"Try!\" button handler
         */
        // for AJAX sandbox
        \$(document).on('api_resource_content:load', function(e) {
            \$(e.target).find('.pane.sandbox form').bindFirst('submit', preSubmitSandboxForm)
        });
        // for not AJAX sandbox
        \$('.pane.sandbox form').bindFirst('submit', preSubmitSandboxForm);

        /**
         * Add sandbox input data handler
         */
        \$(document).on('click', 'li[data-pane=\"sandbox\"]', function() {
            /**
             * Fill input requirements: version and _format
             */
            var parameters = \$(this).closest('.content').find('fieldset.parameters'),
                format = \$('input.key[value=\"_format\"]', parameters).closest('.tuple').find('input.value'),
                version = \$('input.key[value=\"version\"]', parameters).closest('.tuple').find('input.value');
            if (format.val() === '') {
                format.val('json');
            }
            if (version.val() === '') {
                version.val('latest');
            }

            /**
             * Add view headers
             */
            ";
        // line 347
        if ((array_key_exists("views", $context) && (isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 347, $this->source); })()))) {
            // line 348
            echo "var \$headers = \$(this).closest('.content').find('fieldset.headers'),
                    routePath = \$(this).parents('li.operation').find('div.heading span.path').text(),
                    apiAction = apiActions[\$(this).closest('.operation').attr('id')] || null,
                    headerActions = [],
                    headers = {};
                ";
            // line 353
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 353, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["view"]) {
                // line 354
                if ((twig_get_attribute($this->env, $this->source, $context["view"], "headers", [], "any", true, true, false, 354) && twig_get_attribute($this->env, $this->source, $context["view"], "headers", [], "any", false, false, false, 354))) {
                    // line 355
                    echo "if (apiType === '";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "' && routePath.indexOf('/api/rest/') === -1) {
                    ";
                    // line 356
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["view"], "headers", [], "any", false, false, false, 356));
                    foreach ($context['_seq'] as $context["headerName"] => $context["headerValues"]) {
                        // line 357
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["headerValues"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["headerValue"]) {
                            // line 358
                            echo "headerActions = ";
                            echo json_encode(twig_get_attribute($this->env, $this->source, $context["headerValue"], "actions", [], "any", false, false, false, 358));
                            echo ";
                    if (!apiAction || headerActions.length === 0 || headerActions.indexOf(apiAction) >= 0) {
                        headers['";
                            // line 360
                            echo twig_escape_filter($this->env, $context["headerName"], "html", null, true);
                            echo "'] = headers['";
                            echo twig_escape_filter($this->env, $context["headerName"], "html", null, true);
                            echo "']
                            ? headers['";
                            // line 361
                            echo twig_escape_filter($this->env, $context["headerName"], "html", null, true);
                            echo "'] + ';";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["headerValue"], "value", [], "any", false, false, false, 361), "html", null, true);
                            echo "'
                            : '";
                            // line 362
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["headerValue"], "value", [], "any", false, false, false, 362), "html", null, true);
                            echo "';
                    }
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['headerName'], $context['headerValues'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 366
                    echo "for (var key in headers) {
                        addHeader(\$headers, key, headers[key]);
                    }
                }
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 373
        echo "});

        /**
         * Add API resource handler
         */
        \$(document).on('api_resource_content:load', function(e) {
            var \$container = \$(e.target).closest('.operation'),
                \$filters = \$container.find('.pane.content>table>tbody table'),
                \$form = \$container.find('.pane.sandbox form');

            /**
             * Add relation links
             */
            \$filters.find('td:contains(Relation)').each(function (index, el) {
                handleResourceLinks(\$(el).next(), apiPrefix);
            });
            \$container.find('.pane.content table.input>tbody>tr').each(function (parentIndex, parentEl) {
                \$(parentEl).find('td:eq(1)').each(function (index, el) {
                    handleResourceLinks(\$(el), apiPrefix);
                });
            });
            \$container.find('.pane.content table.output>tbody>tr').each(function (parentIndex, parentEl) {
                \$(parentEl).find('td:eq(1)').each(function (index, el) {
                    handleResourceLinks(\$(el), apiPrefix);
                });
            });

            /**
             * Add the operators selector for filters
             */
            \$filters.find('td:contains(Operators)').each(function (index, el) {
                var \$el = \$(el),
                    filterId = \$el.closest('table').parent().prev().text(),
                    operators = \$el.next().text(),
                    operatorToShow,
                    options = '',
                    \$operatorEl = null;
                if (filterId) {
                    \$operatorEl = \$form.find(\"input.key[value='\" + escapeSelector(filterId) + \"']\").next();
                    if (\$operatorEl.length && \$operatorEl.prop(\"tagName\") == 'SPAN' && \$operatorEl.text() == '=') {
                        operators = operators.split(',');
                        for (var i = 0; i < operators.length; i++) {
                            operatorToShow = operators[i];
                            if (operators[i] in operatorMap) {
                                operatorToShow = operatorMap[operators[i]];
                            }
                            options += '<option value=\"' + operators[i] + '\">' + operatorToShow + '</option>'
                        }
                        \$operatorEl.replaceWith('<select class=\"operator\">' + options + '</select>');
                    }
                }
            });
        });

        /**
         * A handler to add operators to the sandbox AJAX requests
         */
        \$.ajaxPrefilter(function(options) {
            if (options.headers === undefined || options.headers['X-API-Sandbox-Operation-ID'] === undefined) {
                return;
            }

            /**
             * Replace \"=\" operator with the operator selected by an user
             */
            var operationId = escapeSelector(options.headers['X-API-Sandbox-Operation-ID']);
            \$('.pane.sandbox form .parameters .tuple', \$('#' + operationId)).each(function() {
                var key = \$('.key', \$(this)).val(),
                    operator = \$('.operator', \$(this)).val(),
                    value = \$('.value', \$(this)).val(),
                    data, obj, keyPair;
                if (value !== '' && operator !== undefined && operator !== '=' && operator !== 'eq') {
                    if (options.url.indexOf('?') !== -1) {
                        options.url = options.url.replace(
                            new RegExp(\"([\\?&])?(\" + key.replace(/[\\[\\]]/g, \"\\\\\$&\") + \")=\"), \"\$1\$2[\" + operator + ']='
                        );
                    }
                    if (!jQuery.isEmptyObject(options.data) && options.data !== '{}') {
                        if (options.data.lastIndexOf('{\"', 0) === 0) {
                            // json
                            data = JSON.parse(options.data);
                            keyPair = key.match(/^(.+)\\[([^\\]]+)\\]\$/);
                            obj = {};
                            if(keyPair) {
                                if (data.hasOwnProperty(keyPair[1]) && data[keyPair[1]].hasOwnProperty(keyPair[2])) {
                                    obj[operator] = data[keyPair[1]][keyPair[2]];
                                    data[keyPair[1]][keyPair[2]] = obj;
                                }
                            } else if (data.hasOwnProperty(key)) {
                                obj[operator] = data[key];
                                data[key] = obj;
                            }
                            options.data = JSON.stringify(data);
                        } else {
                            // uri string
                            options.data = options.data.replace(
                                new RegExp(\"([\\?&])?(\" + encodeURIComponent(key) + \")=\"), \"\$1\$2[\" + operator + ']='
                            );
                        }
                    }
                }
            });

            /**
             * Remove \"Content-type\" header if both \"Content-type\" and \"Content-Type\" headers exist
             */
            if (options.headers['Content-Type'] !== undefined && options.headers['Content-type'] !== undefined) {
                delete options.headers['Content-type'];
            }
        });

        /**
         * A handler to correct a result of the sandbox AJAX requests
         */
        \$(document).ajaxComplete(function(event, jqXHR, options) {
            if (options.headers === undefined || options.headers['X-API-Sandbox-Operation-ID'] === undefined) {
                return;
            }

            var \$result = \$(
                    '.pane.sandbox .result',
                    \$('#' + escapeSelector(options.headers['X-API-Sandbox-Operation-ID']))
                );

            delete options.headers['X-API-Sandbox-Operation-ID'];

            /**
             * Update \"Request URL\" section
             */
            \$('.url', \$result).text(
                options.type + ' ' + decodeURIComponent(options.url)
            );

            /**
             * Hide the request body and add a button to display it
             */
            \$('.request-body', \$result).hide();
            var \$requestBodyHeader = \$('.request-body-header', \$result);
            if (\$('.toggle-request-body', \$requestBodyHeader).length) {
                \$('.toggle-request-body', \$requestBodyHeader).text('Show');
            } else {
                \$requestBodyHeader.append('&nbsp;<small>[<a href=\"\" class=\"toggle-request-body\">Show</a>]</small>');
            }

            /**
             * Update \"Curl Command Line\" section
             */
            displayCurl(options.type, options.url, options.headers, options.data, \$('.curl-command', \$result));
        });

        /**
         * Add the request body visibility handler
         */
        \$(document).on('click', '.pane.sandbox .toggle-request-body', function(e) {
            \$(this).text(
                \$('.request-body', \$(this).parents('.result')).toggle().is(':visible') ? 'Hide' : 'Show'
            );
            e.preventDefault();
        });
    });
</script>

<div class=\"motd\"></div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroApi/ApiDoc/motd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 373,  575 => 366,  562 => 362,  556 => 361,  550 => 360,  544 => 358,  540 => 357,  536 => 356,  531 => 355,  529 => 354,  525 => 353,  518 => 348,  516 => 347,  468 => 302,  412 => 249,  403 => 242,  393 => 234,  385 => 231,  380 => 229,  378 => 228,  374 => 227,  369 => 226,  367 => 225,  363 => 224,  360 => 223,  358 => 222,  352 => 218,  348 => 216,  330 => 213,  325 => 212,  319 => 211,  317 => 210,  300 => 209,  298 => 208,  296 => 207,  269 => 183,  182 => 101,  178 => 100,  170 => 95,  165 => 93,  161 => 92,  157 => 91,  153 => 90,  149 => 89,  145 => 88,  141 => 87,  137 => 86,  133 => 85,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set rootPath = path(rootRoute) %}
<style type=\"text/css\">
    #summary { display: none; }
    #api_type { float: left; font-size: 1.2em; padding: 12px 24px; }
    #api_type a.active { font-weight: bold; color: #3d5b00; }
    .authentication-warning svg { vertical-align: middle; padding-right: 5px; }
    div.motd { padding-top: 10px; }
    div.motd div.documentation { padding: 3px 0; overflow: hidden; }
    div.motd div.documentation a { text-decoration: none; }
    div.motd div.documentation a.main { font-size: 1.2em; }
    div.motd div.documentation p { padding: 10px 0 0 0; }
    div.motd div.documentation ul { padding-left: 10px; list-style-type: disc; list-style-position: inside; }
    #sandbox_configuration { padding-top: 16px; padding-bottom: 5px; }
    #sandbox_configuration .account-info { position: absolute; top: 7px; right: 16px; }
    #sandbox_configuration .account-info em { padding-left: 1em; color: #2c4300; }
    #sandbox_configuration .account-info a { padding-left: 2em; color: #2c4300; text-decoration: underline; }
</style>
<script>
    handleResourceLinks = function (\$el, apiPrefix) {
        var value = \$el.text(),
            prefix = '', suffix = '', links = [], elements, i, j, resourceId;
        i = value.indexOf(' (');
        if (-1 !== i) {
            j = value.indexOf(')', i);
            if (-1 !== j) {
                prefix = value.substr(0, i + 2);
                suffix = value.substr(j);
            }
        } else if (0 === value.indexOf('array of ')) {
            prefix = 'array of ';
        }
        if (value && value.substr(prefix.length, 2) !== '<a') {
            \$el.text('');
            elements = value.substr(prefix.length, value.length - prefix.length - suffix.length).split(',');
            for (i = 0; i < elements.length; i++) {
                resourceId = getResourceId('get-' + apiPrefix + '-api-' + elements[i].trim());
                if (resourceId) {
                    links.push('<a href=\"#' + resourceId
                        + '\" onclick=\"return gotoResource(\\'' + resourceId + '\\');\">'
                        + elements[i] + '</a>');
                } else {
                    links.push(elements[i]);
                }
            }
            \$el.append(prefix + links.join(', ') + suffix);
        }
    };
    getResourceId = function (listResourceId) {
        var itemResourceId = listResourceId + '-{id}';
        if (\$('#' + escapeSelector(itemResourceId)).length) {
            return itemResourceId;
        }
        if (\$('#' + escapeSelector(listResourceId)).length) {
            return listResourceId;
        }
        return null;
    };
    gotoResource = function (resourceId) {
        var resourceId = escapeSelector(resourceId),
            \$section = \$('#' + resourceId).closest('.section'),
            \$toggler = \$('#' + resourceId + ' > .toggler');
        if (!\$section.hasClass('active')) {
            \$section.find('h1').trigger('click');
        }
        if (\$toggler.next().is(':visible')) {
            window.location.hash = \$toggler.data('href');
        } else {
            \$toggler.trigger('click');
        }

        return false;
    };
    escapeSelector = function (val) {
        return val.replace(/(:|\\.|\\[|\\]|\\{|\\}|,)/g, \"\\\\\$1\");
    };
    getCookieValue = function(name) {
        var value = '; ' + document.cookie;
        var parts = value.split('; ' + name + '=');
        if (parts.length === 2) {
            return parts.pop().split(';').shift();
        }
        return '';
    };
    \$(function() {
        var organizations = {{ organizations|json_encode|raw }},
            organization = {{ organization|json_encode|raw }},
            userName = {{ userName|json_encode|raw }},
            apiKey = {{ apiKey|json_encode|raw }},
            apiKeyGenerationHint = {{ apiKeyGenerationHint|default('')|json_encode|raw }},
            switchOrganizationUrl = {{ switchOrganizationRoute ? path(switchOrganizationRoute)|json_encode|raw : 'null' }},
            loginUrl = {{ loginRoute ? path(loginRoute)|json_encode|raw : 'null' }},
            logoutUrl = {{ logoutRoute ? path(logoutRoute)|json_encode|raw : 'null' }},
            sessionAllowed = {{ hasSecurityToken|json_encode|raw }},
            wsseAllowed = userName && apiKey,
            serverTime = {{ 'now'|date('c', 'UTC')|json_encode|raw }},
            clientTime = new Date(),
            serverTimeOffset = Date.parse(serverTime) - clientTime,
            \$motd = \$('.motd').first(),
            \$apiDocLink = \$('#header a').first(),
            apiActions = {{ actions|default([])|json_encode|raw }},
            apiType = window.location.pathname.substr('{{ rootPath }}'.length + 1) || '{{ defaultView }}',
            apiPrefix = '',
            operatorMap = {'eq': '=', 'neq': '!=', 'gt': '>', 'lt': '<', 'gte': '>=', 'lte': '<='},
            escapeHtmlAttribute = function (val) {
                return val.replace(/\"/g,'&quot;');
            },
            addHeader = function (\$headers, headerKey, headerValue) {
                var needsHeader = true,
                    emptyHeader = null;
                \$('.tuple', \$headers).each(function (index, header) {
                    if (\$('input.key:text[value=\"' + headerKey + '\"]', header).length) {
                        needsHeader = false;
                    } else if (!emptyHeader
                        && \$('input.key:text[value=]', header).length
                        && \$('input.value:text[value=]', header).length
                    ) {
                        emptyHeader = header;
                    }
                });
                if (needsHeader) {
                    if (emptyHeader) {
                        fillHeader(emptyHeader, headerKey, headerValue);
                    } else {
                        \$('button.add_header', \$headers).trigger('click');
                        fillHeader(\$headers.find('.tuple:not(.autogenerated-header):last'), headerKey, headerValue);
                    }
                }
            },
            removeHeader = function (\$headers, headerKey) {
                \$('input.key:text[value=\"' + headerKey + '\"]', \$headers).closest('.tuple').remove();
            },
            getHeaderValue = function (\$headers, headerKey) {
                return \$('input.key:text[value=\"' + headerKey + '\"]', \$headers)
                    .closest('.tuple')
                    .find('input.value')
                    .val();
            },
            fillHeader = function (header, headerKey, headerValue) {
                \$('input.key', header).val(headerKey);
                \$('input.value', header).val(headerValue);
            },
            preSubmitSandboxForm = function () {
                var authType = \$('#authentication_type option:selected').val(),
                    \$headers = \$('.headers', this);

                /**
                 * Remove auto-generated headers
                 */
                \$('.autogenerated-header', this).remove();

                /**
                 * Add WSSE authentication related headers
                 */
                if (authType === 'wsse') {
                    \$headers.append(
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"Authorization\">' +
                        '<input type=\"hidden\" class=\"value authorization-header\" placeholder=\"Value\">' +
                        '</div>' +
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-WSSE\">' +
                        '<input type=\"hidden\" class=\"value x-wsse-header\" placeholder=\"Value\">' +
                        '</div>'
                    );
                    \$('input.authorization-header', this).val('WSSE profile=\"UsernameToken\"');
                    \$('input.x-wsse-header', this).val(wsseHeader(userName, apiKey, serverTimeOffset));
                }

                /**
                 * Add Session authentication related headers
                 */
                if (authType === 'session') {
                    \$headers.append(
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-Requested-With\">' +
                        '<input type=\"hidden\" class=\"value\" placeholder=\"Value\" value=\"XMLHttpRequest\">' +
                        '</div>' +
                        '<div class=\"tuple autogenerated-header\">' +
                        '<input type=\"hidden\" class=\"key\" placeholder=\"Key\" value=\"X-CSRF-Header\">' +
                        '<input type=\"hidden\" class=\"value authorization-header\" placeholder=\"Value\">' +
                        '</div>'
                    );
                    \$('input.authorization-header', this).val(getCookieValue({{ csrfCookieName|json_encode|raw }}));
                }

                /**
                 * Add a header contains the id of current operation
                 * It will be used in ajaxPrefilter and ajaxComplete global handlers
                 */
                \$headers.append(
                    '<div class=\"tuple autogenerated-header\">' +
                    '<input type=\"hidden\" class=\"key\" value=\"X-API-Sandbox-Operation-ID\">' +
                    '<input type=\"hidden\" class=\"value operation-header\">' +
                    '</div>'
                );
                \$('input.operation-header', this).val(\$(this).closest('.operation').attr('id'));
            };

        var apiPrefixMatch = window.location.pathname.match(/\\/(\\w+)\\/api\\//i);
        if (apiPrefixMatch) {
            apiPrefix = '-' + apiPrefixMatch[1];
        }

        /**
         * Add the API view selector
         */
        {% if views is defined and views and views|length > 1 -%}
        \$apiDocLink.after('<div id=\"api_type\">type:' +
            {%- for name, view in views %}
            {%- if view.sandbox %}
                {%- if loop.first %}'&nbsp;' + {% else %}'&nbsp;|&nbsp;' + {% endif -%}
                '<a href=\"' + '{{ rootPath ~ (view.default ? '' : '/' ~ name) }}\"' +
                (apiType === '{{ name }}' ? ' class=\"active\"' : '') + '>{{ view.label }}</a>' +
            {%- endif %}
            {%- endfor -%}
            '</div>');
        {% endif %}

        /**
         * Add the documentation link and the documentation block
         */
        {% if views is defined and views -%}
        var documentationUrl = null, documentation = '';
        {% for name, view in views -%}
        {% if view.sandbox and view.documentation_path -%}
            if (apiType === '{{ name }}') {
                documentationUrl = '{{ asset(view.documentation_path) }}';
                {% if view.documentation is defined and view.documentation -%}
                    documentation = {{ view.documentation|extra_markdown|json_encode|raw }};
                {%- endif -%}
            }
        {% endif -%}
        {%- endfor -%}
        if (documentationUrl) {
            documentation = '<a href=\"' + documentationUrl + '\" class=\"main\"'
                + ' target=\"_blank\">The documentation</a>' + documentation;
        }
        if (documentation) {
            \$motd.append('<div class=\"documentation\">' + documentation + '</div>');
        }
        {% endif %}

        /**
         * Add the authentication type selector
         */
        \$('#sandbox_configuration').prepend(
            (wsseAllowed || !apiKeyGenerationHint ? '' : '<span class=\"authentication-warning\"' +
            ' title=\"' + escapeHtmlAttribute(apiKeyGenerationHint) + '\"' +
            '>{{ include('@OroApi/ApiDoc/warning.svg') }}</span>') +
            'authentication: ' +
            '<select id=\"authentication_type\">' +
                '<option value=\"\"' + (!wsseAllowed && !sessionAllowed ? ' selected=\"\"' : '') + '>None</option>' +
                '<option value=\"wsse\"' + (wsseAllowed ? ' selected=\"\"' : ' disabled=\"\"') + '>WSSE</option>' +
                '<option value=\"session\"' + (!sessionAllowed ? ' disabled=\"\"' : (!wsseAllowed ? ' selected=\"\"' : '')) + '>Session</option>' +
            '</select>'
        );
        if (!wsseAllowed && !sessionAllowed) {
            \$('#header').css('background-color', '#f7fe2e');
        }

        var accountInfo = '', switchOrganizationAllowed = false;

        /**
         * Add organization selector
         */
        if (switchOrganizationUrl && Object.keys(organizations).length > 1) {
            accountInfo += 'organization: <select id=\"organization\">';
            for (var org in organizations) {
                accountInfo += '<option value=\"' + escapeHtmlAttribute(org)
                    + '\"' + (org == organization ? ' selected=\"\"' : '') + '>'
                    + \$('<div/>').text(organizations[org]).html() + '</option>';
            }
            accountInfo += '</select><span id=\"organization_loading\" style=\"display: none;\">Loading...</span>';
            switchOrganizationAllowed = true;
        } else if (organization && (organizations[organization] || false)) {
            accountInfo += 'organization: ' + organizations[organization];
        }

        /**
         * Add login and logout links
         */
        if (userName) {
            accountInfo += '<em>signed in as: ' + userName + '</em>';
            if (logoutUrl) {
                accountInfo += '<a href=\"' + logoutUrl + '?_api_view=' + apiType + '\">sign out</a>'
            }
        } else if (loginUrl) {
            accountInfo += '<a href=\"' + loginUrl + '?_api_view=' + apiType + '\">sign in</a>'
        }

        if (accountInfo) {
            \$('#sandbox_configuration').append('<span class=\"account-info\">' + accountInfo + '</span>');
            if (switchOrganizationAllowed) {
                \$('#organization').on('change', function() {
                    var \$organizationSelector = \$(this),
                        \$organizationLoader = \$('#organization_loading');
                    \$organizationSelector.hide();
                    \$organizationLoader.show();
                    \$.ajax({
                        url: switchOrganizationUrl + '/' + this.value + '.json',
                        type: 'GET',
                        headers: { 'X-CSRF-Header': getCookieValue({{ csrfCookieName|json_encode|raw }}) },
                        success: function() {
                            window.location.reload();
                        },
                        error: function() {
                            \$organizationSelector.val(organization);
                            \$organizationLoader.hide();
                            \$organizationSelector.show();
                            alert('Failed to switch the organization.');
                        }
                    });
                });
            }
        }

        /**
         * Add \"Try!\" button handler
         */
        // for AJAX sandbox
        \$(document).on('api_resource_content:load', function(e) {
            \$(e.target).find('.pane.sandbox form').bindFirst('submit', preSubmitSandboxForm)
        });
        // for not AJAX sandbox
        \$('.pane.sandbox form').bindFirst('submit', preSubmitSandboxForm);

        /**
         * Add sandbox input data handler
         */
        \$(document).on('click', 'li[data-pane=\"sandbox\"]', function() {
            /**
             * Fill input requirements: version and _format
             */
            var parameters = \$(this).closest('.content').find('fieldset.parameters'),
                format = \$('input.key[value=\"_format\"]', parameters).closest('.tuple').find('input.value'),
                version = \$('input.key[value=\"version\"]', parameters).closest('.tuple').find('input.value');
            if (format.val() === '') {
                format.val('json');
            }
            if (version.val() === '') {
                version.val('latest');
            }

            /**
             * Add view headers
             */
            {% if views is defined and views -%}
                var \$headers = \$(this).closest('.content').find('fieldset.headers'),
                    routePath = \$(this).parents('li.operation').find('div.heading span.path').text(),
                    apiAction = apiActions[\$(this).closest('.operation').attr('id')] || null,
                    headerActions = [],
                    headers = {};
                {% for name, view in views -%}
                {% if view.headers is defined and view.headers -%}
                if (apiType === '{{ name }}' && routePath.indexOf('/api/rest/') === -1) {
                    {% for headerName, headerValues in view.headers -%}
                    {% for headerValue in headerValues -%}
                    headerActions = {{ headerValue.actions|json_encode|raw }};
                    if (!apiAction || headerActions.length === 0 || headerActions.indexOf(apiAction) >= 0) {
                        headers['{{ headerName }}'] = headers['{{ headerName }}']
                            ? headers['{{ headerName }}'] + ';{{ headerValue.value }}'
                            : '{{ headerValue.value }}';
                    }
                    {% endfor -%}
                    {% endfor -%}
                    for (var key in headers) {
                        addHeader(\$headers, key, headers[key]);
                    }
                }
                {% endif %}
                {%- endfor %}
            {%- endif -%}
        });

        /**
         * Add API resource handler
         */
        \$(document).on('api_resource_content:load', function(e) {
            var \$container = \$(e.target).closest('.operation'),
                \$filters = \$container.find('.pane.content>table>tbody table'),
                \$form = \$container.find('.pane.sandbox form');

            /**
             * Add relation links
             */
            \$filters.find('td:contains(Relation)').each(function (index, el) {
                handleResourceLinks(\$(el).next(), apiPrefix);
            });
            \$container.find('.pane.content table.input>tbody>tr').each(function (parentIndex, parentEl) {
                \$(parentEl).find('td:eq(1)').each(function (index, el) {
                    handleResourceLinks(\$(el), apiPrefix);
                });
            });
            \$container.find('.pane.content table.output>tbody>tr').each(function (parentIndex, parentEl) {
                \$(parentEl).find('td:eq(1)').each(function (index, el) {
                    handleResourceLinks(\$(el), apiPrefix);
                });
            });

            /**
             * Add the operators selector for filters
             */
            \$filters.find('td:contains(Operators)').each(function (index, el) {
                var \$el = \$(el),
                    filterId = \$el.closest('table').parent().prev().text(),
                    operators = \$el.next().text(),
                    operatorToShow,
                    options = '',
                    \$operatorEl = null;
                if (filterId) {
                    \$operatorEl = \$form.find(\"input.key[value='\" + escapeSelector(filterId) + \"']\").next();
                    if (\$operatorEl.length && \$operatorEl.prop(\"tagName\") == 'SPAN' && \$operatorEl.text() == '=') {
                        operators = operators.split(',');
                        for (var i = 0; i < operators.length; i++) {
                            operatorToShow = operators[i];
                            if (operators[i] in operatorMap) {
                                operatorToShow = operatorMap[operators[i]];
                            }
                            options += '<option value=\"' + operators[i] + '\">' + operatorToShow + '</option>'
                        }
                        \$operatorEl.replaceWith('<select class=\"operator\">' + options + '</select>');
                    }
                }
            });
        });

        /**
         * A handler to add operators to the sandbox AJAX requests
         */
        \$.ajaxPrefilter(function(options) {
            if (options.headers === undefined || options.headers['X-API-Sandbox-Operation-ID'] === undefined) {
                return;
            }

            /**
             * Replace \"=\" operator with the operator selected by an user
             */
            var operationId = escapeSelector(options.headers['X-API-Sandbox-Operation-ID']);
            \$('.pane.sandbox form .parameters .tuple', \$('#' + operationId)).each(function() {
                var key = \$('.key', \$(this)).val(),
                    operator = \$('.operator', \$(this)).val(),
                    value = \$('.value', \$(this)).val(),
                    data, obj, keyPair;
                if (value !== '' && operator !== undefined && operator !== '=' && operator !== 'eq') {
                    if (options.url.indexOf('?') !== -1) {
                        options.url = options.url.replace(
                            new RegExp(\"([\\?&])?(\" + key.replace(/[\\[\\]]/g, \"\\\\\$&\") + \")=\"), \"\$1\$2[\" + operator + ']='
                        );
                    }
                    if (!jQuery.isEmptyObject(options.data) && options.data !== '{}') {
                        if (options.data.lastIndexOf('{\"', 0) === 0) {
                            // json
                            data = JSON.parse(options.data);
                            keyPair = key.match(/^(.+)\\[([^\\]]+)\\]\$/);
                            obj = {};
                            if(keyPair) {
                                if (data.hasOwnProperty(keyPair[1]) && data[keyPair[1]].hasOwnProperty(keyPair[2])) {
                                    obj[operator] = data[keyPair[1]][keyPair[2]];
                                    data[keyPair[1]][keyPair[2]] = obj;
                                }
                            } else if (data.hasOwnProperty(key)) {
                                obj[operator] = data[key];
                                data[key] = obj;
                            }
                            options.data = JSON.stringify(data);
                        } else {
                            // uri string
                            options.data = options.data.replace(
                                new RegExp(\"([\\?&])?(\" + encodeURIComponent(key) + \")=\"), \"\$1\$2[\" + operator + ']='
                            );
                        }
                    }
                }
            });

            /**
             * Remove \"Content-type\" header if both \"Content-type\" and \"Content-Type\" headers exist
             */
            if (options.headers['Content-Type'] !== undefined && options.headers['Content-type'] !== undefined) {
                delete options.headers['Content-type'];
            }
        });

        /**
         * A handler to correct a result of the sandbox AJAX requests
         */
        \$(document).ajaxComplete(function(event, jqXHR, options) {
            if (options.headers === undefined || options.headers['X-API-Sandbox-Operation-ID'] === undefined) {
                return;
            }

            var \$result = \$(
                    '.pane.sandbox .result',
                    \$('#' + escapeSelector(options.headers['X-API-Sandbox-Operation-ID']))
                );

            delete options.headers['X-API-Sandbox-Operation-ID'];

            /**
             * Update \"Request URL\" section
             */
            \$('.url', \$result).text(
                options.type + ' ' + decodeURIComponent(options.url)
            );

            /**
             * Hide the request body and add a button to display it
             */
            \$('.request-body', \$result).hide();
            var \$requestBodyHeader = \$('.request-body-header', \$result);
            if (\$('.toggle-request-body', \$requestBodyHeader).length) {
                \$('.toggle-request-body', \$requestBodyHeader).text('Show');
            } else {
                \$requestBodyHeader.append('&nbsp;<small>[<a href=\"\" class=\"toggle-request-body\">Show</a>]</small>');
            }

            /**
             * Update \"Curl Command Line\" section
             */
            displayCurl(options.type, options.url, options.headers, options.data, \$('.curl-command', \$result));
        });

        /**
         * Add the request body visibility handler
         */
        \$(document).on('click', '.pane.sandbox .toggle-request-body', function(e) {
            \$(this).text(
                \$('.request-body', \$(this).parents('.result')).toggle().is(':visible') ? 'Hide' : 'Show'
            );
            e.preventDefault();
        });
    });
</script>

<div class=\"motd\"></div>
", "@OroApi/ApiDoc/motd.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ApiBundle/Resources/views/ApiDoc/motd.html.twig");
    }
}
