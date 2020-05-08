# tips-invest

MODELS

Info : yii\base\Model est utilisée en tant que parent pour des classes modèles qui ne sont pas associées à des tables de base de données. yii\db\ActiveRecord est normalement le parent pour les classes modèles qui correspondent à des tables de bases de données.

ROUTER :

Dans l'URL r  signifie route, un ID unique commun toute l'application qui fait référence à une action. Le format de la route est IDContrôleur/IDAction. Quand l'application reçoit une requête, elle vérifie ce paramêtre, en utilisant la partie IDContrôleur pour déterminer quel classe contrôleur doit être instanciée pour traiter la requête. Ensuite, le contrôleur utilisera la partie IDAction pour déterminer quelle action doit être instanciée pour effectuer le vrait travail. 

					IDContrôleur/IDAction
http://hostname/index.php?r=site/dire&message=Hello+World
