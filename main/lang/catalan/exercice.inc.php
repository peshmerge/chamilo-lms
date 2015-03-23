<?php
/*
for more information: see languages.txt in the lang folder.
*/
$SelectADateOnTheCalendar = "Seleccioneu una data del calendari";
$AreYouSureDeleteTestResultBeforeDateD = "Esteu segur que desitgeu eliminar els resultats d'aquest exercici abans de la data seleccionada?";
$CleanStudentsResultsBeforeDate = "Elimina tots els resultats abans de la data seleccionada";
$AreYouSureToEmptyAllTestResults = "Esteu segur d'eliminar tots els resultats de tots els exercicis?";
$CleanAllStudentsResultsForAllTests = "Esteu segur d'eliminar tots els resultats dels exercicis?";
$TestFeedbackNotShown = "Aquesta prova està configurada per no donar retroacció als alumnes. Els comentaris corresponents no es mostraran al final de la prova, però podrien ser-li útil, com a docent, en el moment de revisar els detalls de les preguntes.";
$FeedbackDisplayOptions = "Manera en la qual es mostrarà el comentari definit per a cada pregunta. Aquesta opció defineix com un estudiant visualitzarà els comentaris ingressats per a cada alternativa en cada pregunta. Recomanem avaluar les diferents opcions abans de convidar als estudiants a realitzar aquesta prova.";
$ImportAikenQuizExplanationExample = "Aquest és el text de la pregunta 1 A. Resposta 1 B. Resposta 2 C. Resposta 3 ANSWER: B Aquest és el text de la pregunta 2 (noteu la línia en blanc a dalt). A. Resposta 1 B. Resposta 2 C. Resposta 3 D. Resposta 4 ANSWER: D ANSWER_EXPLANATION: aquest és un text opcional de feedback que apareixerà al costa de la resposta correcta.";
$ImportAikenQuizExplanation = "El format Aiken és un simple format de text (arxiu .txt) amb diversos blocs amb preguntes, cada bloc separat per una línia en blanc. La primera línia és la pregunta. Les línies de respostes tenen un prefix de lletra i punt i, la resposta correcta segueix, amb el prefix 'ANSWER:'. Veure exemple a continuació.";
$ExerciseAikenErrorNoAnswerOptionGiven = "L'arxiu importat té com a mínim una pregunta sense resposta (o les respostes no inclouen la lletra de prefix necessària). Assegureu-vos que cada pregunta tingui com a mínim una resposta i que estigui prefixada per una lletra i un punt o un parèntesi, com segueix: A. Resposta u";
$ExerciseAikenErrorNoCorrectAnswerDefined = "L'arxiu importat conté com a mínim una pregunta sense cap resposta definida. Asseguri's que totes les preguntes tenen una línia tipus ANSWER: [Lletra].";
$ThereWasAProblemWithYourFile = "Hi ha hagut un problema desconegut en el seu arxiu. Reviseu el format i inenteu-ho de nou.";
$YouMustUploadAZipOrTxtFile = "Heu de pujar un arxiu .txt o .zip";
$NoTxtFileFoundInTheZip = "No s'ha trobat cap arxiu .txt en el ZIP";
$ImportAikenQuiz = "Importa prova Aiken";
$ExerciseWasActivatedFromXToY = "L'exercici va estar actiu des del %s fins el %s";
$SelectAnAnswerToContinue = "Heu de seleccionar una resposta per poder continuar";
$IfYouContinueYourAnswerWillBeSavedAnyChangeWillBeNotAllowed = "So continueu, les vostres respostes seran desades y no podreu modificar-les. Esteu segur que voleu continuar?";
$YesImSure = "Sí, estic segur!";
$NoIWantToTurnBack = "No, desitjo revisar abans l'exercici";
$QuestionReused = "Pregunta afegida a l'exercici";
$QuestionCopied = "Pregunta copiada a l'exercici";
$ZeroMeansNoQuestionWillBeSelectedMinusOneMeansThatAllQuestionsWillBeSelected = "-1 = Totes les preguntes seran seleccionades. 0 = Cap pregunta serà seleccionada.";
$EmailNotificationTemplateDescription = "Podeu modificar el correu enviat als usuaris a l'acabar l'exercici. Podeu utilitzar els termes següents: 1. {{ student.username }} 2. {{ student.firstname }} 3. {{ student.lastname }} 4. {{ student.official_code }} 5. {{ exercise.title }} 6. {{ exercise.start_time }} 7. {{ exercise.end_time }} 8. {{ course.title }} 9. {{ course.code }}";
$EmailNotificationTemplate = "Plantilla del correu electrònic enviat a l'usuari a l'acabar l'exercici";
$ExerciseEndButtonDisconnect = "Surt";
$ExerciseEndButtonExerciseHome = "Llista d'exercicis";
$ExerciseEndButtonCourseHome = "Pàgina principal del curs";
$ExerciseEndButton = "Botó a l'acabar l'exercici";
$HideQuestionTitle = "Oculta el títol de la pregunta";
$QuestionSelection = "Selecció de preguntes";
$OrderedCategoriesByParentWithQuestionsRandom = "Categories ordenades segons la categoria pare, amb preguntes desordenades";
$OrderedCategoriesByParentWithQuestionsOrdered = "Categories ordenades segons la categoria pare, amb preguntes ordenades";
$RandomCategoriesWithRandomQuestionsNoQuestionGrouped = "Categories agafades a l'atzar, amb preguntes desordenades (sene agrupar preguntes)";
$RandomCategoriesWithQuestionsOrderedNoQuestionGrouped = "Categories agafades a l'atzar, amb preguntes ordenades (sense agrupar preguntes)";
$RandomCategoriesWithRandomQuestions = "Categories agafades a l'atzar amb preguntes desordenades";
$OrderedCategoriesAlphabeticallyWithRandomQuestions = "Categories ordenades alfabèticament, amb preguntes desordenades";
$RandomCategoriesWithQuestionsOrdered = "Categories agafades a l'atzar, amb preguntes ordenades";
$OrderedCategoriesAlphabeticallyWithQuestionsOrdered = "Categories ordenades alfabèticament, amb preguntes ordenades";
$UsingCategories = "Utilitzant categories";
$OrderedByUser = "Ordenat segons la llista de preguntes";
$ToReview = "Per revisar";
$Unanswered = "Sense contestar";
$Answered = "Contestada";
$CurrentQuestion = "Pregunta actual";
$MediaQuestions = "Anunciats compartits";
$AddedToLPCannotBeAccessed = "Aquest exercici ha estat inclòs en una seqüència d'aprenentatge, per la qual cosa no podrà ser accessible directament pels estudiants des d'aquí. Si voleu col·locar el mateix exercici disponible a través de l'eina exercicis, feu una còpia de l'exercici en qüestió prement sobre la icona de còpia.";
$Exercice = "Exercici";
$Activate = "Activa";
$Deactivate = "Desactiva";
$NoEx = "No hi ha exercicis pel moment";
$NewEx = "Exercici nou";
$Question = "pregunta";
$Questions = "Preguntes";
$Answers = "Respostes";
$True = "Veritat";
$Answer = "Resposta";
$Result = "Puntuació";
$NoResult = "Encara no hi ha resultats";
$YourResults = "Els teus resultats";
$StudentResults = "Puntuació dels estudiants";
$ExerciseType = "Tipus d'exercici";
$ExerciseName = "Nom del test";
$ExerciseDescription = "Descripció del test";
$SimpleExercise = "Una única pàgina";
$SequentialExercise = "Una pregunta per pàgina (seqüencial)";
$RandomQuestions = "Preguntes a l'atzar";
$GiveExerciseName = "Si us plau doneu un nom a l'exercici";
$Sound = "Arxiu de vídeo o àudio";
$DeleteSound = "Eliminar el fitxer d'àudio o vídeo";
$NoAnswer = "Actualment no hi ha respostes";
$GoBackToQuestionPool = "Tornar al banc de preguntes";
$GoBackToQuestionList = "Tornar a la llista de preguntes";
$QuestionAnswers = "Contesta la pregunta";
$UsedInSeveralExercises = " Advertiment! Aquesta pregunta i les seves respostes s'utilitzen en unes quantes proves. Li agradaria modificar-les?";
$ModifyInAllExercises = "a tots els exercicis";
$ModifyInThisExercise = "només en aquest exercici";
$AnswerType = "Tipus de resposta";
$MultipleSelect = "Elecció múltiple (respostes múltiples)";
$FillBlanks = "Completar els espais";
$Matching = "Relacionar";
$AddPicture = "Afegir una imatge";
$ReplacePicture = "Substituir la imatge";
$DeletePicture = "Esborrar la imatge";
$QuestionDescription = "Comentari opcional";
$GiveQuestion = "Si us plau, escriu la pregunta";
$WeightingForEachBlank = "Si us plau, otorgui una puntuació a cada espai en blanc";
$UseTagForBlank = "utilitzeu claudàtors [...] per definir un o més espais en blanc";
$QuestionWeighting = "Puntuació";
$MoreAnswers = "+resp";
$LessAnswers = "-resp";
$MoreElements = "+elem";
$LessElements = "-elem";
$TypeTextBelow = "Si us plau escriu el text a continuació";
$DefaultTextInBlanks = "[Els britànics] viuen al [Regne Unit].";
$DefaultMatchingOptA = "ric";
$DefaultMatchingOptB = "atractiu";
$DefaultMakeCorrespond1 = "El teu pare és";
$DefaultMakeCorrespond2 = "La teva mare és";
$DefineOptions = "Si us plau defineix les opcions";
$MakeCorrespond = "Relacionar";
$FillLists = " Si us plau ompliu les dues llistes següents";
$GiveText = "si us plau escriu el text";
$DefineBlanks = " Si us plau defineixi com a mínim un buit|espai amb claudàtors [...]";
$GiveAnswers = "Si us plau escrigui les respostes de les preguntes";
$ChooseGoodAnswer = "si us plau marqueu la resposta correcta";
$ChooseGoodAnswers = "Si us plau marqueu una o més respostes correctes";
$QuestionList = "Llistat de preguntes del test";
$MoveUp = "Moure amunt";
$MoveDown = "Moure avall";
$GetExistingQuestion = "Obtenir una pregunta de la base";
$FinishTest = "Test finalitzat";
$QuestionPool = "Banc de preguntes";
$OrphanQuestions = "Preguntes orfes";
$NoQuestion = "No hi ha pregunta de moment";
$AllExercises = "Tots els exercicis";
$Filter = "Filtre";
$GoBackToEx = "Tornar a l'exercici";
$Reuse = "Reutilitzar";
$ExerciseManagement = "Admnistració d'exercicis";
$QuestionManagement = "Gestió de preguntes/respostes";
$QuestionNotFound = "No s'ha trobat la pregunta";
$ExerciseNotFound = "No s'ha trobat l'exercici";
$AlreadyAnswered = "Ja ha respost la pregunta";
$ElementList = "Llista d'elements";
$Score = "Puntuació";
$CorrespondsTo = "Es correspon amb";
$ExpectedChoice = "Elecció esperada";
$YourTotalScore = "La teva puntuació total és";
$ReachedMaxAttemptsAdmin = "Ha arribat al nombre màxim d'intents permesos en aquest exercici. No obstant això, com vostè és un professor d'aquest curs, pot seguir contestant-lo. Recordi que els seus resultats no apareixeran en la pàgina de resultats.";
$ExerciseAdded = "Exercici afegit";
$Build = "Construir";
$EvalSet = "Detalls de la puntuació";
$Active = "Actiu";
$Inactive = "Inactiu";
$QuestCreate = "Creació de preguntes";
$ExRecord = "El teu exercici s'ha guardat";
$BackModif = "Retorna a l'edició d'aquest exercici";
$DoEx = "Fes l'exercici";
$DefScor = "Defineix els detalls de la puntuació";
$CreateModif = "Creació/modificació de preguntes";
$Sub = "Subtítol";
$MyAnswer = "La meva resposta";
$MorA = "+resp.";
$LesA = "-resp.";
$RecEx = "Guarda exercici";
$RecQu = "Guarda pregunta";
$RecAns = "Guarda respostes";
$Introduction = "Introducció";
$TitleAssistant = "Assitent de creació d'exercicis";
$QuesList = "Llista de preguntes";
$SaveEx = "Guarda exercici";
$Finish = "Finalitza";
$Cancel = "Cancela";
$QImage = "Pregunta amb una imatge";
$AddQ = "Afegeix pregunta";
$DoAnEx = "Fes un exercici";
$Generator = "Llista d'exercicis";
$Choice = "La teva opció";
$Correct = "Veritat";
$PossAnsw = "Nombre de possibles respostes per una pregunta";
$StudAnsw = "Nombre d'errors comesos per l'estudiant";
$Determine = "Determina tu mateix el pes de la puntuació a través d'editar la taula de sota. Punxa llavors a sobre de D'acord";
$NonNumber = "Un valor no numèric en";
$Replaced = "ha estat introduït. Ha estat substituit per 0";
$Superior = "Un valor més gran de 20 en";
$Rep20 = "ha estat introduit. Ha estat substituit per 20";
$Default = "Valors per defecte *";
$DefComment = "* Si punxes sobre \"Valors per defecte\", els teus valors antics seran esborrats permanentment.";
$ScoreGet = "Números en negre = Puntuació";
$ShowScor = "Mostra puntuació als estudiants:";
$Step1 = "Pas 1";
$Step2 = "Pas 2";
$Take = "Passar la prova";
$Among = "entre";
$ImportHotPotatoesQuiz = "Importar preguntes HotPotatoes";
$HotPotatoesTests = "Importar exercicis HotPotatoes";
$DownloadFile = "Pujar fitxer al servidor";
$DownloadImg = "Enviar una imatge al servidor";
$DownloadEnd = "La pujada de fitxers ha finalitzat";
$NoSpace = "La pujada de fitxers ha fallat. No hi ha prou espai en el vostre directori";
$ZipNoPhp = "El fitxer zip no pot contenir fitxers .PHP";
$NoImg = "Exercici sense imatges";
$ImgNote_st = "Heu de tornar-ho a enviar";
$ImgNote_en = "imatge(s):";
$DocDeleted = "Document esborrat";
$ViMod = "Visibilitat modificada";
$NameNotEqual = "no és un fitxer vàlid";
$Indice = "Índex";
$Indices = "Índex";
$DateExo = "Data";
$ShowQuestion = "Mostrar pregunta";
$UnknownExercise = "Exercici desconegut";
$ReuseQuestion = "Reutilitzar la pregunta";
$CreateExercise = "Crear un exercici";
$CreateQuestion = "Crear una pregunta";
$CreateAnswers = "Crear una resposta";
$ModifyExercise = "Modificar l'exercici";
$ModifyAnswers = "modificar respostes";
$ForExercise = "per l'exercici";
$UseExistantQuestion = "Utilitzar una pregunta existent";
$FreeAnswer = "Resposta oberta";
$notCorrectedYet = "Aquest resposta encara no s'ha corregit. De moment, la puntuació per aquesta pregunta queda a zero. Això afecta a la puntuació total.";
$adminHP = "Administració de Hot Potatoes";
$NewQu = "Pregunta nova";
$NoImage = "Trieu una imatge";
$AnswerHotspot = "Descripció i puntuació són obligatoris per cada zona interactiva - el comentari és opcional";
$MinHotspot = "Heu de crear almenys una zona interactiva";
$MaxHotspot = "El màxim de zones interactives que podeu crear és de dotze.";
$HotspotError = "Ompliu la descripció i la puntuació per cada zona interactiva.";
$MoreHotspots = "+ zona interactiva";
$LessHotspots = "- zona interactiva";
$HotspotZones = "Zones interactives";
$NextQuestion = "Pregunta següent";
$CorrectAnswer = "Resposta correcta";
$HotspotHit = "La seva resposta ha estat";
$OnlyJPG = "Per a les zones interactives només podeu utilitzar imatges en format .jpg o .jpeg";
$FinishThisTest = "Mostrar les respostes correctes per cada pregunta i les puntuacions per la prova";
$AllQuestions = "Totes les preguntes";
$ModifyTitleDescription = "Editar títol i comentari";
$ModifyHotspots = "Editar respostes/zones interactives";
$HotspotNotDrawn = "Encara no ha dibuixat totes les zones interactives";
$HotspotWeightingError = "Heu d'atribuir una puntuació (més gran que zero) per cada zona interactiva";
$HotspotValidateError1 = "Heu de respondre completament a la pregunta (";
$HotspotValidateError2 = "clic(s) requerit sobre la imatge) abans de veure els resultats";
$HotspotRequired = "Descripció i puntuació obligatoris per cada zona interactiva. Comentari opcional.";
$HotspotChoose = "<div style=\"padding:2px 3px;\">• Per crear una zona interactiva: seleccioneu la forma al costat del color, després dibuixeu la zona interactiva.</div><div style=\"padding:2px 3px;\">• Per desplaçar una zona interactiva: seleccioneu el color, cliqueu sobre un altre indret en la imatge i dibuixeu la zona interactiva.</div><div style=\"padding:2px 3px;\">• Per afegir una zona interactiva: cliqueu el botó [+ zona interactiva].</div><div style=\"padding:2px 3px;\">• Per tancar un polígon: clic al botó dret i seleccioneu \"Tancar el polígon\".</div>";
$Fault = "Incorrecte";
$HotSpot = "Zones d'imatge";
$ClickNumber = "Nombre de clics";
$HotspotGiveAnswers = "Doni un resposta, si us plau";
$Addlimits = "Afegiu límits";
$AreYouSure = "N'esteu segur";
$StudentScore = "Puntuació dels alumnes.";
$backtoTesthome = "Retorn a la pàgina d'inici d'aquesta prova";
$Feedback = "Comentari";
$MarkIsUpdated = "La puntuació s'ha actualitzat";
$MarkInserted = "Puntuació inserida";
$PleaseGiveAMark = "Assigneu una puntuació";
$EditCommentsAndMarks = "Corregir i puntuar";
$AddComments = "Afegiu comentaris";
$Number = "Nº";
$Weighting = "Puntuació";
$ChooseQuestionType = "Per crear una nova pregunta, trieu el tipus del damunt";
$MatchesTo = "Correspon a";
$CorrectTest = "Corregir la prova";
$ViewTest = "Veure la prova";
$State = "Estat del sistema";
$NotAttempted = "No intentat";
$AddElem = "+ element";
$DelElem = "- element";
$PlusAnswer = "+ respostes";
$LessAnswer = "- respostes";
$YourScore = "La vostra puntuació";
$Attempted = "Intentat";
$AssignMarks = "Assignar una puntuació";
$Results = "Resultats";
$ExerciseStored = "La prova s'ha afegit correctament";
$ChooseAtLeastOneCheckbox = "Trieu, almenys, una resposta bona";
$ExerciseEdited = "La prova s'ha editat be";
$ExerciseDeleted = "La prova ha estat esborrada";
$ClickToCommentAndGiveFeedback = "Cliqueu sobre el vincle següent per corregir la resposta i comentar-la";
$OpenQuestionsAttempted = "Un alumne ha contestat a una pregunta oberta";
$AttemptDetails = "Detalls de l'assaig";
$TestAttempted = "Nom de la prova";
$StudentName = "Nom de l'alumne";
$StudentEmail = "Correu-e de l'alumne";
$OpenQuestionsAttemptedAre = "La pregunta oberta intentada és";
$CourseName = "Nom del curs";
$UploadJpgPicture = "Enviar una imatge en format JPG";
$HotspotDescription = "Descripció de la zona interactiva";
$ExamSheetVCC = "Exercici vist-corregit-comentat pel professor";
$AttemptVCC = "Els següents intents han estat vistos-corregits-comentats pel professor";
$ClickLinkToViewComment = "Cliqueu l'enllaç inferior per accedir al vostre compte i veure corregit el vostre full d'exercicis";
$Regards = "Cordialment";
$AttemptVCCLong = "El vostre intent en l'exercici %s ha estat vist-corregit-comentat pel professor. Cliqueu l'enllaç inferior per accedir al vostre compte i veure el vostre full d'exercicis.";
$DearStudentEmailIntroduction = "Benvolgut alumne,";
$ExerciseFinished = "Exercici finalitzat";
$ResultsEnabled = "Mode d'autoavaluació activat. Ara, al final de l'exercici, els alumnes podran veure les respostes correctes.";
$ResultsDisabled = "Mode examen activat. Ara, al final de l'exercici, els alumnes no podran veure les respostes correctes.";
$ExportWithUserFields = "Incloure els camps d'usuari a l'exportació";
$ExportWithoutUserFields = "Excloure els camps d'usuari de l'exportació";
$DisableResults = "No mostrar els resultats als alumnes";
$EnableResults = "Mostrar els resultats als alumnes";
$ValidateAnswer = "Acceptar";
$FillInBlankSwitchable = "Una resposta pot ser correcta per a qualsevol de les opcions en blanc.";
$ReachedMaxAttempts = "No pot repetir l'exercici %s degut al fet que ja ha realitzat el màxim de %s intents permesos";
$AdvancedParameters = "Paràmetres avançats";
$RandomQuestionsToDisplay = "Nombre de preguntes aleatòries a mostrar";
$RandomQuestionsHelp = "Nombre de preguntes que seran seleccionades a l'atzar. Triï el nombre de preguntes que desitja remenar.";
$ExerciseAttempts = "Nombre màxim d'intents";
$DoNotRandomize = "Sense desordenar";
$Infinite = "Il·limitat";
$BackToExercisesList = "Tornar a Exercicis";
$ViewScoreChangeHistory = "Veure puntuacion d'historial de canvi";
$NoStartDate = "No comença data";
$NoLogOfDuration = "Cap registre de durada";
$EnableTimeLimits = "Establir un límit temporal";
$ExeStartTime = "Data d'inici";
$ExeEndTime = "Data de finalització";
$Value = "Valor";
$DeleteAttempt = "Eliminar aquest intent ?";
$WithoutComment = "Sense comentaris";
$QuantityQuestions = "Nombre de preguntes";
$FilterExercices = "Filtrar exercicis";
$FilterByNotRevised = "Filtrar per No revisat";
$FilterByRevised = "Filtrar per Revisat";
$Duration = "Duració";
$ReachedTimeLimit = "Ha arribat al temps límit";
$TryAgain = "Intenta altra vegada";
$SeeTheory = "Revisar la teoria";
$EndActivity = "Fi de l'activitat";
$NoFeedback = "Examen (sense retroalimentació)";
$DirectFeedback = "Autoevaluació";
$FeedbackType = "Avaluació";
$Scenario = "Escenari";
$VisitUrl = "Visitar aquesta adreça";
$ExitTest = "Sortir de l'examen";
$DurationFormat = "%1 segons";
$Difficulty = "Dificultat";
$NewScore = "Nova puntuació";
$NewComment = "Nou comentari";
$ExerciseNoStartedYet = "L'exercici encara no s'ha iniciat";
$ExerciseNoStartedAdmin = "El professor no ha iniciat l'exercici";
$SelectTargetLP = "Seleccionar curs de destinació";
$SelectTargetQuestion = "Seleccionar pregunta de destinació";
$DirectFeedbackCantModifyTypeQuestion = "El tipus d'avaluació no pot ser modificat ja que va ser seleccionat per a Autoavaluació";
$CantShowResults = "No disponible";
$CantViewResults = "No es pot veure els resultats";
$ShowCorrectedOnly = "Mostrar exercicis corregits";
$ShowUnCorrectedOnly = "Mostrar exercicis sense corregir";
$HideResultsToStudents = "Ocultar els resultats als estudiants";
$ShowResultsToStudents = "Mostrar els resultats als estudiants";
$ProcedToQuestions = "Preparar preguntes";
$AddQuestionToExercise = "Afegir qüestió";
$PresentationQuestions = "Presentació de les qüestions";
$UniqueAnswer = "Resposta única";
$MultipleAnswer = "Resposta múltiple";
$ReachedOneAttempt = "No pot realitzar l'exercici altra vegada perquè ha superat el nombre d'intents permesos per a la seva execució.";
$QuestionsPerPage = "Preguntes per pàgina";
$QuestionsPerPageOne = "Una";
$QuestionsPerPageAll = "Totes";
$EditIndividualComment = "Editar comentari individual";
$ThankYouForPassingTheTest = "Gràcies per passar l'examen";
$ExerciseAtTheEndOfTheTest = "AL final de l'exercici (retroalimentació)";
$EnrichQuestion = "Perfeccionar pregunta";
$DefaultUniqueQuestion = "Quin dels següents aliments és un producte lacti?";
$DefaultUniqueAnswer1 = "llet";
$DefaultUniqueComment1 = "La llet és la base de nombrosos productes lactis, com la mantega, el formatge, l'iogurt, entre uns altres";
$DefaultUniqueAnswer2 = "Civada";
$DefaultUniqueComment2 = "La civada és un dels cereals més complets. Per les seves qualitats energètiques i nutritives ha estat la base de l'alimentació de pobles";
$DefaultMultipleQuestion = "Quins països no pertanyen al continent europeu?";
$DefaultMultipleAnswer1 = "Espanya";
$DefaultMultipleComment1 = "És un país sobirà membre de la Unió Europea, constituït en Estat social i democràtic de Dret, i la forma del qual de govern és la monarquia parlamentària";
$DefaultMultipleAnswer2 = "Perú";
$DefaultMultipleComment2 = "És un país situat en el costat occidental de Sudamérica. Està limitat pel nord amb Equador i Colòmbia, per l'aquest amb Brasil, pel sud-est amb Bolívia, pel sud amb Xile, i per l'oest amb l'Oceà Pacífic";
$DefaultFillBlankQuestion = "Calcular l'index de masa corporal";
$DefaultMathingQuestion = "Determinar la següent relació";
$DefaultOpenQuestion = "Quan es celebra el dia del Treball?";
$MoreHotspotsImage = "Agregar / editar hotspots en la imatge";
$ReachedTimeLimitAdmin = "Ha arribat a el límit de temps per a realitzar aquest exercici";
$LastScoreTest = "Última puntuació obtinguda";
$BackToResultList = "Tornar a la llista de resultats";
$EditingScoreCauseProblemsToExercisesInLP = "Si edita la puntuació d'aquesta pregunta modificarà el resultat de l'exercici, recordi que aquest exercici està agregat també a una Lliçó";
$SelectExercice = "Seleccionar exercici";
$YouHaveToSelectATest = "Has de seleccionar un exercici";
$HotspotDelineation = "Delineació";
$CreateQuestions = "Crear preguntes";
$MoreOAR = "Afegir OAR";
$LessOAR = "Eliminar OAR";
$LearnerIsInformed = "Aquest missatge apareixerà si l'estudiant falla un pas";
$MinOverlap = "Mínima superposició";
$MaxExcess = "Màxim excés";
$MaxMissing = "Mancança màxima";
$IfNoError = "Si no existeix error";
$LearnerHasNoMistake = "L'estudiant no va cometre errors";
$YourAnswer = "La seva resposta";
$YourDelineation = "La seva delineació";
$ResultIs = "El seu resultat es:";
$Overlap = "Zona de superposició";
$Missing = "Zona mancant";
$Excess = "Zona excessiva";
$Min = "Mínim";
$Max = "Màxim";
$Requirements = "Requisits";
$OARHit = "Un (o mes) OAR han estat seleccionats";
$TooManyIterationsPleaseTryUsingMoreStraightforwardPolygons = "Massa iteracions a l'intentar calcular la resposta. Per favor intenti dibuixar la seua delineació altra vegada";
$Thresholds = "Llindars";
$Delineation = "Delineació";
$QuestionTypeDoesNotBelongToFeedbackTypeInExercise = "Tipus de pregunta no pertany al tipus de retroalimentació en exercicis";
$XResultsCleaned = "%d resultats eliminats";
$AreYouSureToDeleteResults = "Esteu segur de voler eliminar els resultats?";
$ExerciseCopied = "Exercici copiat";
$AreYouSureToCopy = "Esteu segur de voler copiar?";
$EditingExerciseCauseProblemsInLP = "Editar un exercici causarà problemes a Lliçons";
$ExerciseWithFeedbackWithoutCorrectionComment = "Nota: aquest exercici ha estat configurat per ocultar les respostes esperades.";
$SessionIsReadOnly = "La sessió és de només lectura";
$EnableTimerControl = "Habilita control del temps";
$ExerciseTotalDurationInMinutes = "Durada de l'exercici (en minuts)";
$ToContinueUseMenu = "Per continuar aquesta lliçó, utilitzeu el menú lateral.";
$RandomAnswers = "Remena respostes";
$NotMarkActivity = "No és possible qualificar aquest element";
$YouHaveToCreateAtLeastOneAnswer = "Heu de crear com a mínim una resposta";
$ExerciseAttempted = "Un estudiant ha contestat una pregunta";
$MultipleSelectCombination = "Combinació exacta";
$MultipleAnswerCombination = "Combinació exacta";
$ExerciceExpiredTimeMessage = "El temps d'avaluació ha acabat. De totes maneres les preguntes que ja heu respost, seran considerades a l'avaluació de l'exercici.";
$AllQuestionsMustHaveACategory = "Totes les preguntes han de tenir com a mínim una categoria associada.";
$NoMedia = "Sense vincle a medi";
$AttachToMedia = "Vincula a medi";
$ExamModeWithFinalScoreShowOnlyFinalScoreWithCategoriesIfAvailable = "Mostra només el resultat final, amb categories si estan disponibles";
$Media = "Medi";
$ForceEditingExerciseInLPWarning = "Tens permís per editar aquest exercici, encara que ja s'utilitzi en una lliçó. Si l'edita, prova evitar de modificar la puntuació i concentrar-se sobre editar el contingut, però no els valors o la classificació, per evitar afectar els resultats d'estudiants que hagin fet aquesta prova prèviament.";
$CopyExercise = "Copia aquest exercici com un de nou";
$CleanStudentResults = "Esborra tots els resultats dels estudiants amb aquest exercici";
$ImportQtiQuiz = "Importa exercicis de Qti2";
$ReUseACopyInCurrentTest = "Torna a utilitzar una còpia d'aquesta pregunta a l'exercici actual";
$Copy = "Còpia";
$QuestionGlobalCategory = "Categoria laboral";
$CheckThatYouHaveEnoughQuestionsInYourCategories = "Revisa si existeixen suficients preguntes a les seves categories.";
$ScoreAverageFromAllAttempts = "Mitjana de tots els intents en exercicis";
$DefaultContent = "Genera contingut per defecte";
$OralQuestionsAttemptedAreX = "Les preguntes orals respostes són: %s";
$OralQuestionsAttempted = "Un estudiant ha entregat una pregunta oral o més";
$RelativeScore = "Puntuació relativa";
$AbsoluteScore = "Puntuació absoluta";
$EditQuestions = "Edita preguntes";
$ExerciseDescriptionLabel = "Descripció";
$ExerciseEditionNotAvailableInSession = "Edició d'exercici de curs no autoritzada des de la sessió";
$UniqueAnswerNoOption = "Resposta única amb no-sé";
$MultipleAnswerTrueFalse = "Respostes múltiples vertader/fals/no-sé";
$MultipleAnswerCombinationTrueFalse = "Combinació vertader/fals/no-sé";
$DontKnow = "No sé";
$False = "Fals";
$DoubtScore = "No sé";
$HotSpotDelineation = "Delineació hotspot";
$PropagateNegativeResults = "Propaga els resultats negatius entre les preguntes";
$InsertALinkToThisQuestionInTheExercise = "Insereix aquesta pregunta a l'exercici com un vincle (no una còpia)";
$OnlyShowScore = "Mode exercici: mostra només la puntuació";
$ImportExcelQuiz = "Importa exercici via Excel";
$DownloadExcelTemplate = "Descarrega plantilla Excel";
$ExerciseWillBeActivatedFromXToY = "L'exercici estarà visible del %s al %s";
$EnableStartTime = "Utilitza temps de publicació";
$EnableEndTime = "Utilitza tems de finalització de publicació";
$ExerciseAvailableFromX = "Exercici disponible des de el %s";
$ExerciseAvailableUntilX = "Exercici disponible fins el %s";
$TestLimitsAdded = "Límits d'exercicis afegits";
$AddLimits = "Afegeix límits";
$Unlimited = "Sense límits";
$LimitedTime = "Temps limitat";
$LimitedAttempts = "Intents limitats";
$Times = "Temps";
$Random = "Aleatori";
$ExerciseTimerControlMinutes = "Habilita exercicis amb control de temps.";
$Numeric = "Numèric";
$Acceptable = "Acceptable";
$Hotspot = "Zona interactiva";
$ChangeTheVisibilityOfTheCurrentImage = "Canvia visibilitat de la imatge";
$Steps = "Passos";
$OriginalValue = "Valor original";
$ChooseAnAnswer = "Seleccioneu una resposta";
$ImportExercise = "Importa exercici";
$MultipleChoiceMultipleAnswers = "Eleccions múltiples, respostes múltiples";
$MultipleChoiceUniqueAnswer = "Elecció múltiples, resposta única";
$HotPotatoesFiles = "Arxius HotPotatoes";
$HotPotatoes = "HotPotatoes";
$OAR = "Zona a evitar";
$TotalScoreTooBig = "La qualificació total és massa gran";
$InvalidQuestionType = "Tipus de pregunta no vàlid";
$ShowScoreAndRightAnswer = "Mode autoavaluació: mostra la puntuació i les respostes esperade";
$DoNotShowScoreNorRightAnswer = "Mode examen: no mostris res (ni puntuació, ni respostes)";
$LoadUsersExtraData = "Carrega les dades addicionals dels usuaris";
$StartTest = "Inicia la prova";
$SaveForNow = "Desa i continua";
$QuestionsToReview = "Preguntes que desitgeu comprovar";
$QuestionWithNoAnswer = "Preguntes sense respondre";
$ValidateAnswers = "Valida respostes";
$ReviewQuestions = "Comprova les preguntes seleccionades";
$YouTriedToResolveThisExerciseEarlier = "Ja heu intentat resoldre aquesta pregunta anteriorment";
$ThereAreNoQuestionsForThisExercise = "En aquest exercici no hi ha preguntes disponibles";
$ContinueTest = "Continua amb l'exercici";
$XQuestionsWithTotalScoreY = "%d preguntes, amb un resultat màxim (totes les preguntes) de %s.";
$QuestionLowerCase = "pregunta";
$QuestionsLowerCase = "preguntes";
$Category = "Categoria";
$BackToTestList = "Torna a la llista d'exercicis";
$CategoryDescription = "Descripció de la categoria";
$BackToCategoryList = "Torna a la llista de categories";
$AddCategoryNameAlreadyExists = "Aquest nom de categoria ja existeix. Indiqueu un altre nom.";
$CannotDeleteCategory = "No es pot eliminar la categoria";
$CannotDeleteCategoryError = "Error: no es pot esborrar la categoria";
$CannotEditCategory = "No es pot editar la categoria";
$ModifyCategory = "Modifica la categoria";
$ModifyCategoryError = "No es pot modificar la categoria";
$AllCategories = "Totes les categories";
$AllGroups = "Tots els grups";
$FilterByGroup = "Filtre per grup";
$CreateQuestionOutsideExercice = "Crea pregunta fora de qualsevol exercici";
$ChoiceQuestionType = "Escull tipus de pregunta";
$YesWithCategoriesSorted = "Sí, amb categories ordenades";
$YesWithCategoriesShuffled = "Sí, amb categories remenades";
$ManageAllQuestions = "Gestiona totes les preguntes";
$MustBeInATest = "Heu d'estar en un exercici";
$PleaseSelectSomeRandomQuestion = "Seleccioneu una pregunta aleatòria";
$RemoveFromTest = "Treu de l'exercici";
$AddQuestionToTest = "Afegeix pregunta a l'exercici";
$QuestionByCategory = "Pregunta per categoria";
$QuestionUpperCaseFirstLetter = "Pregunta amb primera lletra majúscula";
$QuestionCategory = "Categoria de preguntes";
$AddACategory = "Afegeix categoria";
$CategoryName = "Nom de la categoria";
$AddTestCategory = "Afegeix categoria d'exercicis";
$AddCategoryDone = "Categoria afegida";
$NbCategory = "Nombre de categories";
$DeleteCategoryAreYouSure = "Esteu segur de voler eliminar aquesta categoria?";
$DeleteCategoryDone = "Categoria eliminada";
$EditCategory = "Edita categoria";
$MofidfyCategoryDone = "Categoria modificada";
$NoCategory = "No hi ha categoria";
$NotInAGroup = "No està a cap grup";
$DoFilter = "Filtra";
$ByCategory = "Per categoria";
$ResultsNotRevised = "Resultats no revisats";
$ResultNotRevised = "Resultat no revisat";
$NumberOfStudentsWhoTryTheExercise = "Nombre d'estudiants que han intentat l'exercici";
$LowestScore = "Resultat mínim obtingut";
$HighestScore = "Resultat màxim obtingut";
$MaximumScore = "Resultat màxim";
$NotRevised = "No revisat";
$PreviousQuestion = "Pregunta anterior";
$Options = "Opcions";
$RandomQuestionByCategory = "Preguntes a l'atzar per categoria";
$QuestionDisplayCategoryName = "Mostra la categoria de pregunta";
$ReviewAnswers = "Revisa les meves respostes";
$TextWhenFinished = "Text que apareix al finalitzar la prova";
$Validated = "Corregit";
$NotValidated = "Sense corregir";
$Revised = "Revisat";
$SelectAQuestionToReview = "Seleccioneu una pregunta per revisar";
$ReviewQuestionLater = "Revisa la pregunta més endavant";
$NumberStudentWhoSelectedIt = "Nombre d'estudiants que l'han seleccionada";
$QuestionsAlreadyAnswered = "Preguntes ja contestades";
$StudentsWhoAreTakingTheExerciseRightNow = "Estudiants que realitzen l'exercici en aquest moment";
$ReportByQuestion = "Informe per pregunta";
$LiveResults = "Resultats en directe";
$RecordAnswer = "Grava resposta";
$UseTheMessageBelowToAddSomeComments = "Utilitza el camp de text següent per escriure un comentari al professor";
$SendRecord = "Envia gravació";
$DownloadLatestRecord = "Descarrega gravació";
$OralExpression = "Expressió oral";
$CongratulationsYouPassedTheTest = "Felicitats, heu aprovat l'exercici!";
$YouDidNotReachTheMinimumScore = "No heu arribat a la puntuació mínima";
$EndTest = "Acaba exercici";
$PassPercentage = "Percentatge d'assoliment";
$NoCategorySelected = "No hi ha una categoria seleccionada";
$ExerciseAverage = "Mitjana de l'exercici";
$NoNegativeScore = "Sense punts negatius";
$GlobalMultipleAnswer = "Resposta múltiple global";
$AllQuestionsShort = "Totes";
$ProblemsRecordingUploadYourOwnAudioFile = "Teniu problemes per gravar? Pugeu el vostre propi arxiu d'àudio.";
?>