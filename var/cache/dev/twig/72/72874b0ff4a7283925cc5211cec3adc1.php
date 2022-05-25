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

/* @OroOAuth2Server/Security/login.html.twig */
class __TwigTemplate_6ef4a50e801939da65aab736ceb444f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'bodyClass' => [$this, 'block_bodyClass'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOAuth2Server/Security/login.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Security/login.html.twig"));

        $this->parent = $this->loadTemplate("@OroUser/layout.html.twig", "@OroOAuth2Server/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head", $this->getTemplateName(), 2));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        echo "    <style type=\"text/css\">
        #login-page-loader {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 800;
            background: white url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzgiIGhlaWdodD0iMzgiIHZpZXdCb3g9IjAgMCAzOCAzOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCB4MT0iOC4wNDIlIiB5MT0iMCUiIHgyPSI2NS42ODIlIiB5Mj0iMjMuODY1JSIgaWQ9ImEiPgogICAgICAgICAgICA8c3RvcCBzdG9wLWNvbG9yPSIjODg4IiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iMCUiLz4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzg4OCIgc3RvcC1vcGFjaXR5PSIuNjMxIiBvZmZzZXQ9IjYzLjE0NiUiLz4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzg4OCIgb2Zmc2V0PSIxMDAlIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMSAxKSI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0zNiAxOGMwLTkuOTQtOC4wNi0xOC0xOC0xOCIgaWQ9Ik92YWwtMiIgc3Ryb2tlPSJ1cmwoI2EpIiBzdHJva2Utd2lkdGg9IjIiPgogICAgICAgICAgICAgICAgPGFuaW1hdGVUcmFuc2Zvcm0KICAgICAgICAgICAgICAgICAgICBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iCiAgICAgICAgICAgICAgICAgICAgdHlwZT0icm90YXRlIgogICAgICAgICAgICAgICAgICAgIGZyb209IjAgMTggMTgiCiAgICAgICAgICAgICAgICAgICAgdG89IjM2MCAxOCAxOCIKICAgICAgICAgICAgICAgICAgICBkdXI9IjAuOXMiCiAgICAgICAgICAgICAgICAgICAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIC8+CiAgICAgICAgICAgIDwvcGF0aD4KICAgICAgICAgICAgPGNpcmNsZSBmaWxsPSIjZmZmIiBjeD0iMzYiIGN5PSIxOCIgcj0iMSI+CiAgICAgICAgICAgICAgICA8YW5pbWF0ZVRyYW5zZm9ybQogICAgICAgICAgICAgICAgICAgIGF0dHJpYnV0ZU5hbWU9InRyYW5zZm9ybSIKICAgICAgICAgICAgICAgICAgICB0eXBlPSJyb3RhdGUiCiAgICAgICAgICAgICAgICAgICAgZnJvbT0iMCAxOCAxOCIKICAgICAgICAgICAgICAgICAgICB0bz0iMzYwIDE4IDE4IgogICAgICAgICAgICAgICAgICAgIGR1cj0iMC45cyIKICAgICAgICAgICAgICAgICAgICByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgLz4KICAgICAgICAgICAgPC9jaXJjbGU+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K') center center no-repeat;
        }
        .form-wrapper {
            margin:auto;
            background: none;
            justify-content: center;
        }
        .form_container {
            background: hsla(0,0%,100%,.8);
            display: flex;
            flex-grow: .2;
            flex-direction: column;
        }
        .login-copyright{
            padding: 16px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 31
    public function block_bodyClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("bodyClass", $this->getTemplateName(), 31));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "login-page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 32
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("messages", $this->getTemplateName(), 32));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content", $this->getTemplateName(), 34));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "<div id=\"login-page-loader\"></div>
<div class=\"container\">
    <div class=\"form-wrapper\">
        <div class=\"form_container\">
            <div class=\"form-wrapper__inner\">
                ";
        // line 40
        $context["usernameLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username");
        // line 41
        echo "                ";
        $context["passwordLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password");
        // line 42
        echo "                ";
        $context["showLabels"] = ((twig_length_filter($this->env, (isset($context["usernameLabel"]) || array_key_exists("usernameLabel", $context) ? $context["usernameLabel"] : (function () { throw new RuntimeError('Variable "usernameLabel" does not exist.', 42, $this->source); })())) <= 9) && (twig_length_filter($this->env, (isset($context["passwordLabel"]) || array_key_exists("passwordLabel", $context) ? $context["passwordLabel"] : (function () { throw new RuntimeError('Variable "passwordLabel" does not exist.', 42, $this->source); })())) <= 9));
        // line 43
        echo "                ";
        $context["layoutName"] = (((isset($context["showLabels"]) || array_key_exists("showLabels", $context) ? $context["showLabels"] : (function () { throw new RuntimeError('Variable "showLabels" does not exist.', 43, $this->source); })())) ? ("form-row-layout") : ("form-column-layout"));
        // line 44
        echo "                <form id=\"login-form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_oauth2_server_login_check");
        echo "\" method=\"post\" class=\"form-signin form-signin--login ";
        echo twig_escape_filter($this->env, (isset($context["layoutName"]) || array_key_exists("layoutName", $context) ? $context["layoutName"] : (function () { throw new RuntimeError('Variable "layoutName" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\">
                    <div class=\"form-description\">
                        ";
        // line 46
        if ($this->extensions['Oro\Bundle\ThemeBundle\Twig\ThemeExtension']->getThemeLogo()) {
            // line 47
            echo "                            <div class=\"form-description__logo\">
                                <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Oro\Bundle\ThemeBundle\Twig\ThemeExtension']->getThemeLogo()), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.auth.description.logo"), "html", null, true);
            echo "\"
                                     class=\"form-description__logo-img\">
                            </div>
                        ";
        }
        // line 53
        echo "                        <div class=\"form-description__main\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.auth_code.login_message", ["%app_name%" => (isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 53, $this->source); })())]), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"title-box\">
                        <h2 class=\"title\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
        echo "</h2>
                    </div>
                    <fieldset class=\"field-set\">
                        ";
        // line 59
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "                            <div class=\"alert alert-error\" role=\"alert\">
                                <div>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageKey", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageData", [], "any", false, false, false, 61), "security"), "html", null, true);
            echo "</div>
                            </div>
                        ";
        }
        // line 64
        echo "                        ";
        echo twig_escape_filter($this->env, (isset($context["messagesContent"]) || array_key_exists("messagesContent", $context) ? $context["messagesContent"] : (function () { throw new RuntimeError('Variable "messagesContent" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "
                        <div class=\"input-field-group\">
                            <div class=\"input-prepend\">
                                <label for=\"prependedInput\" class=\"add-on\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["usernameLabel"]) || array_key_exists("usernameLabel", $context) ? $context["usernameLabel"] : (function () { throw new RuntimeError('Variable "usernameLabel" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</label>
                                <input type=\"text\" id=\"prependedInput\" class=\"input\" autocomplete=\"username\" name=\"_username\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username or Email"), "html", null, true);
        echo "\" autofocus>
                            </div>
                            <div class=\"input-prepend input-prepend--last\">
                                <label for=\"prependedInput2\" class=\"add-on\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["passwordLabel"]) || array_key_exists("passwordLabel", $context) ? $context["passwordLabel"] : (function () { throw new RuntimeError('Variable "passwordLabel" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "</label>
                                <input type=\"password\" id=\"prependedInput2\" class=\"input\" autocomplete=\"off\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-signin__footer\">
                            <button type=\"submit\" class=\"btn extra-submit btn-uppercase btn-primary\" id=\"_submit\" name=\"_submit\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log in"), "html", null, true);
        echo "</button>
                        </div>
                    </fieldset>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\">
                </form>
            </div>
            <div class=\"login-copyright\">";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.copyright", ["{{year}}" => twig_date_format_filter($this->env, "now", "Y")]), "html", null, true);
        echo "</div>
        </div>
    </div>
    <script type=\"text/javascript\">
        document.getElementById('login-form').addEventListener('submit', function (event) {
            var buttons = event.target.getElementsByTagName('button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].setAttribute('disabled', 'disabled');
            }
        });
        window.addEventListener('load', function() {
            var loader = document.getElementById('login-page-loader');
            if (loader) {
                loader.parentNode.removeChild(loader);
            }
        });
    </script>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroOAuth2Server/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 82,  287 => 79,  281 => 76,  274 => 72,  270 => 71,  262 => 68,  258 => 67,  251 => 64,  245 => 61,  242 => 60,  240 => 59,  234 => 56,  227 => 53,  220 => 49,  216 => 48,  213 => 47,  211 => 46,  203 => 44,  200 => 43,  197 => 42,  194 => 41,  192 => 40,  185 => 35,  172 => 34,  148 => 32,  123 => 31,  85 => 5,  80 => 3,  67 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUser/layout.html.twig' %}
{% block head %}
    {{ parent() }}
    {# since some browsers (like FF) show html content before css and other resources are completely loaded follow loading animation was added #}
    <style type=\"text/css\">
        #login-page-loader {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 800;
            background: white url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzgiIGhlaWdodD0iMzgiIHZpZXdCb3g9IjAgMCAzOCAzOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCB4MT0iOC4wNDIlIiB5MT0iMCUiIHgyPSI2NS42ODIlIiB5Mj0iMjMuODY1JSIgaWQ9ImEiPgogICAgICAgICAgICA8c3RvcCBzdG9wLWNvbG9yPSIjODg4IiBzdG9wLW9wYWNpdHk9IjAiIG9mZnNldD0iMCUiLz4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzg4OCIgc3RvcC1vcGFjaXR5PSIuNjMxIiBvZmZzZXQ9IjYzLjE0NiUiLz4KICAgICAgICAgICAgPHN0b3Agc3RvcC1jb2xvcj0iIzg4OCIgb2Zmc2V0PSIxMDAlIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMSAxKSI+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0zNiAxOGMwLTkuOTQtOC4wNi0xOC0xOC0xOCIgaWQ9Ik92YWwtMiIgc3Ryb2tlPSJ1cmwoI2EpIiBzdHJva2Utd2lkdGg9IjIiPgogICAgICAgICAgICAgICAgPGFuaW1hdGVUcmFuc2Zvcm0KICAgICAgICAgICAgICAgICAgICBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iCiAgICAgICAgICAgICAgICAgICAgdHlwZT0icm90YXRlIgogICAgICAgICAgICAgICAgICAgIGZyb209IjAgMTggMTgiCiAgICAgICAgICAgICAgICAgICAgdG89IjM2MCAxOCAxOCIKICAgICAgICAgICAgICAgICAgICBkdXI9IjAuOXMiCiAgICAgICAgICAgICAgICAgICAgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiIC8+CiAgICAgICAgICAgIDwvcGF0aD4KICAgICAgICAgICAgPGNpcmNsZSBmaWxsPSIjZmZmIiBjeD0iMzYiIGN5PSIxOCIgcj0iMSI+CiAgICAgICAgICAgICAgICA8YW5pbWF0ZVRyYW5zZm9ybQogICAgICAgICAgICAgICAgICAgIGF0dHJpYnV0ZU5hbWU9InRyYW5zZm9ybSIKICAgICAgICAgICAgICAgICAgICB0eXBlPSJyb3RhdGUiCiAgICAgICAgICAgICAgICAgICAgZnJvbT0iMCAxOCAxOCIKICAgICAgICAgICAgICAgICAgICB0bz0iMzYwIDE4IDE4IgogICAgICAgICAgICAgICAgICAgIGR1cj0iMC45cyIKICAgICAgICAgICAgICAgICAgICByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgLz4KICAgICAgICAgICAgPC9jaXJjbGU+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K') center center no-repeat;
        }
        .form-wrapper {
            margin:auto;
            background: none;
            justify-content: center;
        }
        .form_container {
            background: hsla(0,0%,100%,.8);
            display: flex;
            flex-grow: .2;
            flex-direction: column;
        }
        .login-copyright{
            padding: 16px;
        }
    </style>
{% endblock %}
{% block bodyClass %}login-page{% endblock %}
{% block messages %}
{% endblock %}
{% block content %}
<div id=\"login-page-loader\"></div>
<div class=\"container\">
    <div class=\"form-wrapper\">
        <div class=\"form_container\">
            <div class=\"form-wrapper__inner\">
                {% set usernameLabel = 'Username'|trans %}
                {% set passwordLabel = 'Password'|trans %}
                {% set showLabels = (usernameLabel|length <= 9) and (passwordLabel|length <= 9) %}
                {% set layoutName = showLabels ? 'form-row-layout' : 'form-column-layout' %}
                <form id=\"login-form\" action=\"{{ path('oro_oauth2_server_login_check') }}\" method=\"post\" class=\"form-signin form-signin--login {{ layoutName }}\">
                    <div class=\"form-description\">
                        {% if oro_theme_logo() %}
                            <div class=\"form-description__logo\">
                                <img src=\"{{ asset(oro_theme_logo()) }}\"
                                     alt=\"{{ 'oro.auth.description.logo'|trans }}\"
                                     class=\"form-description__logo-img\">
                            </div>
                        {% endif %}
                        <div class=\"form-description__main\">{{ 'oro.oauth2server.auth_code.login_message'|trans({'%app_name%': appName}) }}</div>
                    </div>
                    <div class=\"title-box\">
                        <h2 class=\"title\">{{ 'Login'|trans }}</h2>
                    </div>
                    <fieldset class=\"field-set\">
                        {% if error %}
                            <div class=\"alert alert-error\" role=\"alert\">
                                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                            </div>
                        {% endif %}
                        {{ messagesContent }}
                        <div class=\"input-field-group\">
                            <div class=\"input-prepend\">
                                <label for=\"prependedInput\" class=\"add-on\">{{ usernameLabel }}</label>
                                <input type=\"text\" id=\"prependedInput\" class=\"input\" autocomplete=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'Username or Email'|trans }}\" autofocus>
                            </div>
                            <div class=\"input-prepend input-prepend--last\">
                                <label for=\"prependedInput2\" class=\"add-on\">{{ passwordLabel }}</label>
                                <input type=\"password\" id=\"prependedInput2\" class=\"input\" autocomplete=\"off\" name=\"_password\" required=\"required\" placeholder=\"{{ 'Password'|trans }}\">
                            </div>
                        </div>
                        <div class=\"form-signin__footer\">
                            <button type=\"submit\" class=\"btn extra-submit btn-uppercase btn-primary\" id=\"_submit\" name=\"_submit\">{{ 'Log in'|trans }}</button>
                        </div>
                    </fieldset>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\">
                </form>
            </div>
            <div class=\"login-copyright\">{{ 'oro.copyright'|trans({ '{{year}}': 'now'|date('Y') }) }}</div>
        </div>
    </div>
    <script type=\"text/javascript\">
        document.getElementById('login-form').addEventListener('submit', function (event) {
            var buttons = event.target.getElementsByTagName('button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].setAttribute('disabled', 'disabled');
            }
        });
        window.addEventListener('load', function() {
            var loader = document.getElementById('login-page-loader');
            if (loader) {
                loader.parentNode.removeChild(loader);
            }
        });
    </script>
</div>
{% endblock content %}
", "@OroOAuth2Server/Security/login.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/oauth2-server/src/Oro/Bundle/OAuth2ServerBundle/Resources/views/Security/login.html.twig");
    }
}
