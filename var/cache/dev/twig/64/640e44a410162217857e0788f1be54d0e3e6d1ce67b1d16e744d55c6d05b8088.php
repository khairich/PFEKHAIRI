<?php

/* competence/Recherche.html.twig */
class __TwigTemplate_39ad34d90342e66d94c50b01a00939e536d99ba828e276f38704b9d130c70d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competence/Recherche.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competence/Recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Competence</h1>

    <table>
        <tbody>
     

            <tr>
                <th>User</th>
                </tr>
              
                
                     ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skill"]) ? $context["skill"] : $this->getContext($context, "skill")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 17
                echo "                     ";
                if (($this->getAttribute($context["i"], "id_user_id", array()) == $this->getAttribute($context["j"], "id", array()))) {
                    // line 18
                    echo "                <tr>
                <td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["j"], "nick", array()), "html", null, true);
                    echo "</td>
            </tr>
                    ";
                }
                // line 22
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                
                
     
        </tbody>
    </table>

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "competence/Recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  80 => 23,  74 => 22,  68 => 19,  65 => 18,  62 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Competence</h1>

    <table>
        <tbody>
     

            <tr>
                <th>User</th>
                </tr>
              
                
                     {% for i in skill %}
                     {% for j in user %}
                     {% if i.id_user_id == j.id %}
                <tr>
                <td>{{ j.nick}}</td>
            </tr>
                    {% endif %}
                    {% endfor %}
                    {% endfor %}
                
                
     
        </tbody>
    </table>

  
{% endblock %}
", "competence/Recherche.html.twig", "C:\\wamp\\www\\khairi_pfe\\app\\Resources\\views\\competence\\Recherche.html.twig");
    }
}
