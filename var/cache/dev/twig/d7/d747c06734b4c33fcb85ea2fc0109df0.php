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

/* @OroSync/sync_js.html.twig */
class __TwigTemplate_f45498c244ef7feb3cbbf602fb07a75d extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSync/sync_js.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSync/sync_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSync/sync_js.html.twig"));

        // line 1
        if ($this->extensions['Oro\Bundle\SyncBundle\Twig\OroSyncExtension']->checkWsConnected()) {
            // line 2
            echo "<script>
    loadModules(['jquery', 'orosync/js/sync', 'orosync/js/sync/wamp', 'routing'],
    function(\$, sync, Wamp, routing){
        \$(document).on('click.action.data-api', '[data-action=sync-connect]', function (e) {
            sync.reconnect();
            \$(e.target).closest('.alert').alert('close');
            e.preventDefault();
        });

        sync(new Wamp({
            secure: ";
            // line 12
            echo ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "headers", [], "any", false, false, false, 12), "get", [0 => "X-Forwarded-Proto"], "method", false, false, false, 12) == "https") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "isSecure", [], "method", false, false, false, 12))) ? ("true") : ("false"));
            echo ",
            host: '";
            // line 13
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["ws"]) || array_key_exists("ws", $context) ? $context["ws"] : (function () { throw new RuntimeError('Variable "ws" does not exist.', 13, $this->source); })()), "host", [], "any", false, false, false, 13) == "*")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "host", [], "any", false, false, false, 13)) : (twig_get_attribute($this->env, $this->source, (isset($context["ws"]) || array_key_exists("ws", $context) ? $context["ws"] : (function () { throw new RuntimeError('Variable "ws" does not exist.', 13, $this->source); })()), "host", [], "any", false, false, false, 13))), "html", null, true);
            echo "',
            port: ";
            // line 14
            echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["ws"]) || array_key_exists("ws", $context) ? $context["ws"] : (function () { throw new RuntimeError('Variable "ws" does not exist.', 14, $this->source); })()), "port", [], "any", false, false, false, 14));
            echo ",
            path: '";
            // line 15
            echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["ws"]) || array_key_exists("ws", $context) ? $context["ws"] : (function () { throw new RuntimeError('Variable "ws" does not exist.', 15, $this->source); })()), "path", [], "any", false, false, false, 15), "/"), "html", null, true);
            echo "',
            retryDelay: 60000,
            syncTicketUrl: routing.generate('oro_sync_ticket')
        }));
    });
</script>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSync/sync_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  68 => 14,  64 => 13,  60 => 12,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if check_ws() %}
<script>
    loadModules(['jquery', 'orosync/js/sync', 'orosync/js/sync/wamp', 'routing'],
    function(\$, sync, Wamp, routing){
        \$(document).on('click.action.data-api', '[data-action=sync-connect]', function (e) {
            sync.reconnect();
            \$(e.target).closest('.alert').alert('close');
            e.preventDefault();
        });

        sync(new Wamp({
            secure: {{ app.request.headers.get('X-Forwarded-Proto') == 'https' or app.request.isSecure() ? 'true' : 'false' }},
            host: '{{ ws.host == '*' ? app.request.host : ws.host }}',
            port: {{ ws.port|json_encode|raw }},
            path: '{{ ws.path|trim('/') }}',
            retryDelay: 60000,
            syncTicketUrl: routing.generate('oro_sync_ticket')
        }));
    });
</script>
{% endif %}
", "@OroSync/sync_js.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SyncBundle/Resources/views/sync_js.html.twig");
    }
}
