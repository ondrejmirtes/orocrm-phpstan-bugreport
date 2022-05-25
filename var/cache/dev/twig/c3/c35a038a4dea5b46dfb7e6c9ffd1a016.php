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

/* @OroMessageQueue/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig */
class __TwigTemplate_c8f3e3a536a9255987e95e3274908e56 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroMessageQueue/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMessageQueue/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroMessageQueue/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig"));

        // line 1
        if ($this->extensions['Oro\Bundle\SyncBundle\Twig\OroSyncExtension']->checkWsConnected()) {
            // line 2
            echo "<script>
    loadModules(['orosync/js/sync', 'oroui/js/messenger'],
        function (sync, messenger) {
            sync.subscribe('oro/message_queue_heartbeat', function (response) {
                messenger.notificationMessage(
                    'error',
                    ";
            // line 9
            echo "
                    '";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.message_queue_job.no_alive_consumers"), "html", null, true);
            echo "'
                );
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
        return "@OroMessageQueue/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  56 => 9,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if check_ws() %}
<script>
    loadModules(['orosync/js/sync', 'oroui/js/messenger'],
        function (sync, messenger) {
            sync.subscribe('oro/message_queue_heartbeat', function (response) {
                messenger.notificationMessage(
                    'error',
                    {#A php message was used here instead of a js message because this message is used in a php code as well.#}

                    '{{ 'oro.message_queue_job.no_alive_consumers'|trans }}'
                );
            });
        });
</script>
{% endif %}
", "@OroMessageQueue/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/MessageQueueBundle/Resources/views/ConsumerHeartbeat/queue_consumer_heartbeat_js.html.twig");
    }
}
