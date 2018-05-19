<?php

/* rating/new.html.twig */
class __TwigTemplate_adb61e1fe8a1f2cc77a4c7d53fc802ed2bfb232faed5d10d60137676bdbc33b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rating/new.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo " \"></script>
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/rating.js"), "html", null, true);
        echo " \"> </script>
    <link rel=\"stylesheet\"  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/rating.css"), "html", null, true);
        echo " \" type=\"text/css\" media=\"screen\" title=\"Rating CSS\">
    <script type=\"text/javascript\"> 
        \$(function(){
        \$('.container').rating();
                    });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "<center>
  ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 15
        echo "                ";
        // line 22
        echo " 

                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vote", array()), 'widget', array("attr" => array("class" => "container")));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vote", array()), 'errors');
        echo " 
                <input type=\"submit\" value=\"Create\"/>
                 ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "            
<ul>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rating_index");
        echo "\">Back to the list</a>
    </ul>
</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "rating/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  90 => 27,  85 => 25,  81 => 24,  77 => 22,  75 => 15,  71 => 13,  68 => 12,  62 => 11,  48 => 4,  44 => 3,  39 => 2,  33 => 1,  26 => 11,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascripts %}
<script type=\"text/javascript\" src=\"{{ asset('assets/js/jquery.min.js')}} \"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/custom/rating.js')}} \"> </script>
    <link rel=\"stylesheet\"  href=\"{{ asset('assets/css/rating.css') }} \" type=\"text/css\" media=\"screen\" title=\"Rating CSS\">
    <script type=\"text/javascript\"> 
        \$(function(){
        \$('.container').rating();
                    });
    </script>
{% endblock %}
{% block content %}
<center>
  {{ form_start (form) }}
                {# {{ form_label(form.vote,'Vote') }} #}
                {# <section class=\"container\">
        <input type=\"radio\" name=\"example\" class=\"rating\" value=\"1\" />
        <input type=\"radio\" name=\"example\" class=\"rating\" value=\"2\" />
        <input type=\"radio\" name=\"example\" class=\"rating\" value=\"3\" />
        <input type=\"radio\" name=\"example\" class=\"rating\" value=\"4\" />
        <input type=\"radio\" name=\"example\" class=\"rating\" value=\"5\" />
 </section> #}
 

                {{ form_widget(form.vote,{'attr':{'class':'container'}}) }}
                {{ form_errors(form.vote) }} 
                <input type=\"submit\" value=\"Create\"/>
                 {{ form_end(form) }}            
<ul>
        <a href=\"{{ path('rating_index') }}\">Back to the list</a>
    </ul>
</center>
{% endblock %}", "rating/new.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\rating\\new.html.twig");
    }
}
