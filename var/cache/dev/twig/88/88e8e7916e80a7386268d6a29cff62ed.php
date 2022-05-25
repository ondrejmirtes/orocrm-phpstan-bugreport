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

/* @OroZendesk/Case/syncButton.html.twig */
class __TwigTemplate_083e2e00f437213040d5f573bb74948e extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroZendesk/Case/syncButton.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroZendesk/Case/syncButton.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroZendesk/Case/syncButton.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            $context["channels"] = $this->extensions['Oro\Bundle\ZendeskBundle\Twig\ZendeskExtension']->getEnabledTwoWaySyncChannels();
            // line 3
            echo "    ";
            $context["firstChannel"] = twig_first($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 3, $this->source); })()));
            // line 4
            echo "    ";
            $context["togglerId"] = uniqid("dropdown-");
            // line 5
            echo "    <div class=\"btn-group zendesk-integration-btn-group\">
        <a class=\"zendesk-integration-btn btn icons-holder-text no-hash\"
           href=\"#\"
           role=\"button\"
           data-channel-id=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firstChannel"]) || array_key_exists("firstChannel", $context) ? $context["firstChannel"] : (function () { throw new RuntimeError('Variable "firstChannel" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\"
        >
           <span class=\"fa-upload  hide-text\" aria-hidden=\"true\"></span>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.form.sync_to_zendesk.label"), "html", null, true);
            echo "
        </a>
        <a href=\"#\" role=\"button\" id=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.form.sync_to_zendesk.label"), "html", null, true);
            echo "\">
           <span class=\"sr-only\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.zendesk.form.sync_to_zendesk.label"), "html", null, true);
            echo "</span>
       </a>
        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 19
                echo "                <li>
                    <a href=\"#\"
                       role=\"menuitem\"
                       class=\"zendesk-integration-btn icons-holder-text no-hash\"
                       data-channel-id=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "name", [], "any", false, false, false, 24), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </ul>
    </div>
    <script type=\"text/javascript\">
        loadModules(['jquery', 'routing', 'oroui/js/mediator', 'oroui/js/messenger', 'orotranslation/js/translator'],
            function (\$, routing, mediator, messenger, __) {
                \$('.zendesk-integration-btn').bind('click', function(event) {
                    event.preventDefault();

                    var id = \$(this).data('channel-id');
                    var url = routing.generate('oro_api_post_ticket_sync_case', {id: '";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "', channelId: id});

                    mediator.execute('showLoading');
                    \$.post({
                        url: url,
                        errorHandlerMessage: __('oro.zendesk.reverse_sync.fail_message')
                    }).done(function(res, status, jqXHR) {
                        mediator.once('page:afterChange', function(){
                            messenger.notificationFlashMessage('success', __('oro.zendesk.reverse_sync.success_message'));
                        });
                        mediator.execute('refreshPage', {restore: true});
                    }).always(function () {
                        mediator.execute('hideLoading');
                    });

                    return false;
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
        return "@OroZendesk/Case/syncButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 37,  114 => 28,  104 => 24,  100 => 23,  94 => 19,  90 => 18,  86 => 17,  81 => 15,  77 => 14,  73 => 13,  68 => 11,  63 => 9,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('EDIT', entity) %}
    {% set channels = oro_zendesk_enabled_two_way_sync_channels() %}
    {% set firstChannel = channels|first %}
    {% set togglerId = 'dropdown-'|uniqid %}
    <div class=\"btn-group zendesk-integration-btn-group\">
        <a class=\"zendesk-integration-btn btn icons-holder-text no-hash\"
           href=\"#\"
           role=\"button\"
           data-channel-id=\"{{ firstChannel.id }}\"
        >
           <span class=\"fa-upload  hide-text\" aria-hidden=\"true\"></span>{{ \"oro.zendesk.form.sync_to_zendesk.label\"|trans }}
        </a>
        <a href=\"#\" role=\"button\" id=\"{{ togglerId }}\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"
           aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"{{ 'oro.zendesk.form.sync_to_zendesk.label'|trans }}\">
           <span class=\"sr-only\">{{ 'oro.zendesk.form.sync_to_zendesk.label'|trans }}</span>
       </a>
        <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"{{ togglerId }}\">
            {% for channel in channels %}
                <li>
                    <a href=\"#\"
                       role=\"menuitem\"
                       class=\"zendesk-integration-btn icons-holder-text no-hash\"
                       data-channel-id=\"{{ channel.id }}\">
                        {{ channel.name }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
    <script type=\"text/javascript\">
        loadModules(['jquery', 'routing', 'oroui/js/mediator', 'oroui/js/messenger', 'orotranslation/js/translator'],
            function (\$, routing, mediator, messenger, __) {
                \$('.zendesk-integration-btn').bind('click', function(event) {
                    event.preventDefault();

                    var id = \$(this).data('channel-id');
                    var url = routing.generate('oro_api_post_ticket_sync_case', {id: '{{ entity.id }}', channelId: id});

                    mediator.execute('showLoading');
                    \$.post({
                        url: url,
                        errorHandlerMessage: __('oro.zendesk.reverse_sync.fail_message')
                    }).done(function(res, status, jqXHR) {
                        mediator.once('page:afterChange', function(){
                            messenger.notificationFlashMessage('success', __('oro.zendesk.reverse_sync.success_message'));
                        });
                        mediator.execute('refreshPage', {restore: true});
                    }).always(function () {
                        mediator.execute('hideLoading');
                    });

                    return false;
                });
            });
    </script>
{% endif %}
", "@OroZendesk/Case/syncButton.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-zendesk/Resources/views/Case/syncButton.html.twig");
    }
}
