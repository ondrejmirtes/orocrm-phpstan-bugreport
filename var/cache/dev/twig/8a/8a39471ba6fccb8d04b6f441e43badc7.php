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

/* @OroSync/maintenance_js.html.twig */
class __TwigTemplate_5f3b71a8b82000bf55fe94bd8b5494b6 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSync/maintenance_js.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSync/maintenance_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSync/maintenance_js.html.twig"));

        // line 1
        if ($this->extensions['Oro\Bundle\SyncBundle\Twig\OroSyncExtension']->checkWsConnected()) {
            // line 2
            echo "<script>
    loadModules(['orosync/js/sync', 'oroui/js/modal', 'orotranslation/js/translator'],
    function(sync, Modal, __) {
        var dialog = null;

        sync.subscribe('oro/maintenance', function (response) {
            var userId = null;
            ";
            // line 9
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9))) {
                // line 10
                echo "                userId = ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10);
                echo ";
            ";
            }
            // line 12
            echo "
            if (response.isOn && (!userId || parseInt(userId) != parseInt(response.userId))) {
                var regExp = new RegExp('\\n', 'g');
                if (dialog) {
                    dialog.close();
                    dialog.remove();
                }
                dialog = new Modal({
                    content: __('oro.platform.maintenance_mode_on_message').replace(regExp, '<br/>'),
                    className: 'modal oro-modal-danger oro-modal-maintenance',
                    allowCancel: false,
                    title: __('oro.platform.maintenance_mode_on_title'),
                    attributes: {
                        role: 'alertdialog'
                    }
                });
                dialog.open();
            } else if (dialog) {
                dialog.close();
            }
        });
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
        return "@OroSync/maintenance_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  59 => 10,  57 => 9,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if check_ws() %}
<script>
    loadModules(['orosync/js/sync', 'oroui/js/modal', 'orotranslation/js/translator'],
    function(sync, Modal, __) {
        var dialog = null;

        sync.subscribe('oro/maintenance', function (response) {
            var userId = null;
            {% if app.user is not null %}
                userId = {{ app.user.id|raw }};
            {% endif %}

            if (response.isOn && (!userId || parseInt(userId) != parseInt(response.userId))) {
                var regExp = new RegExp('\\n', 'g');
                if (dialog) {
                    dialog.close();
                    dialog.remove();
                }
                dialog = new Modal({
                    content: __('oro.platform.maintenance_mode_on_message').replace(regExp, '<br/>'),
                    className: 'modal oro-modal-danger oro-modal-maintenance',
                    allowCancel: false,
                    title: __('oro.platform.maintenance_mode_on_title'),
                    attributes: {
                        role: 'alertdialog'
                    }
                });
                dialog.open();
            } else if (dialog) {
                dialog.close();
            }
        });
    });
</script>
{% endif %}
", "@OroSync/maintenance_js.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SyncBundle/Resources/views/maintenance_js.html.twig");
    }
}
