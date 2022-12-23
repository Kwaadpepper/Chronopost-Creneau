# Chronopost Creneau PHP Soap generated Lib

LE SERVICE DE RECHERCHE DE CRENEAU DE LIVRAISON ET DE GEOCODAGE (Creneau)

Chronopost WSDL php generated lib using https://github.com/WsdlToPhp/PackageGenerator

This package will only contain generated content from chronopost endpoint https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl

    wsdltophp generate:package \
        --urlorpath="https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl" \
        --destination="." \
        --composer-name="kwaadpepper/chronopost-creneau" \
        --force