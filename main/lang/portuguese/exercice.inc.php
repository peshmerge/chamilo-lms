<?php
/*
for more information: see languages.txt in the lang folder.
*/
$SelectADateOnTheCalendar = "Selecione uma data do calendário";
$AreYouSureDeleteTestResultBeforeDateD = "Tem a certeza que deseja apagar os resultados deste teste antes da data selecionada?";
$CleanStudentsResultsBeforeDate = "Apagar todos os resultados antes da data selecionada";
$AreYouSureToEmptyAllTestResults = "Apagar todos os resultados dos estudantes em todos os exercícios?";
$CleanAllStudentsResultsForAllTests = "Tem a certeza de que deseja apagar todos os resultados dos testes?";
$TestFeedbackNotShown = "O teste está configurado para não mostrar comentários aos estudantes. OS comentários não serão visíveis no final do teste, mas podem ser úteis para si, como professor, quando quiser rever detalhes das questões.";
$FeedbackDisplayOptions = "Como pretende que sejam vistos os comentários de cada questão? Esta opção define como serão vistos pelo estudante quando estiver a realizar o teste. Recomendamos que tente outras opções editando as opções do teste antes de o disponibilizar aos estudantes.";
$ImportAikenQuizExplanationExample = "Este é o texto para a questão 1 A. Resposta 1 B. Resposta 2 C. Resposta 3 RESPOSTA: B Este é o texto para a questão 2 A. Resposta 1 B. Resposta 2 C. Resposta 3 D. Resposta 4 RESPOSTA: D JUSTIFICAÇÃO DA RESPOSTA: este é um comentário opcional que aparece junto à resposta correta.";
$ImportAikenQuizExplanation = "O formato Aiken aparece com um simples ficheiro de texto (.txt), com vários blocos de questões separados por uma linha vazia. A primeira linha é a pergunta, as possíveis respostas são precedidas de uma letra e um ponto e a resposta correta aparece precedida de RESPOSTA. Veja o exemplo abaixo.";
$ExerciseAikenErrorNoAnswerOptionGiven = "O ficheiro importado tem, pelo menos, uma questão sem qualquer resposta (ou as respostas não incluem a letra exigida como prefixo). Por favor assegure-se de que cada questão tem pelo menos uma resposta precedida por uma letra e um ponto ou um parênteses, desta forma: A. resposta um";
$ExerciseAikenErrorNoCorrectAnswerDefined = "O ficheiro importado inclui pelo menos uma questão sem uma resposta correta definida. Por favor assegure-se de que todas as questões incluem a linha da RESPOSTA: [letra]";
$ThereWasAProblemWithYourFile = "Ocorreu um erro desconhecido com o ficheiro. Por favor reveja o formato deste e tente de novo.";
$YouMustUploadAZipOrTxtFile = "Tem de enviar um ficheiro .txt ou um .zip";
$NoTxtFileFoundInTheZip = "Nenhum ficheiro .txt ou .zip encontrado";
$ImportAikenQuiz = "Importar um Quiz Aiken";
$ExerciseWasActivatedFromXToY = "O exercício foi ativado desde %s até %s";
$SelectAnAnswerToContinue = "Selecione uma resposta para continuar";
$IfYouContinueYourAnswerWillBeSavedAnyChangeWillBeNotAllowed = "Se continuar, as suas respostas serão guardadas, qualquer alteração não será permitida mais tarde. Tem a certeza de que deseja continuar?";
$YesImSure = "Sim, tenho a certeza!";
$NoIWantToTurnBack = "Não, desejo continuar o exercício.";
$QuestionReused = "Questão adicionada ao exercício";
$QuestionCopied = "Questão copiada para o exercício";
$ZeroMeansNoQuestionWillBeSelectedMinusOneMeansThatAllQuestionsWillBeSelected = "-1 = Todas as questões serão selecionadas. 0 = Nenhuma questão será selecionada..";
$EmailNotificationTemplateDescription = "Pode personalizar o email enviado aos utilizadores após a conclusão do exercício. Pode usar tags como estas: 1. {{ student.username }} 2. {{ student.firstname }} 3. {{ student.lastname }} 4. {{ student.official_code }} 5. {{ exercise.title }} 6. {{ exercise.start_time }} 7. {{ exercise.end_time }} 8. {{ course.title }} 9. {{ course.code }}";
$EmailNotificationTemplate = "Modelo de email de notificação";
$ExerciseEndButtonDisconnect = "Logout/Sair";
$ExerciseEndButtonExerciseHome = "Lista de exercícios";
$ExerciseEndButtonCourseHome = "Página inicial do Curso";
$ExerciseEndButton = "Botão de fim de exercício";
$HideQuestionTitle = "Ocultar título da questão";
$QuestionSelection = "Tipo de seleção de questões";
$OrderedCategoriesByParentWithQuestionsRandom = "Categorias ordenadas pela origem com questões aleatórias";
$OrderedCategoriesByParentWithQuestionsOrdered = "Categorias ordenadas pela origem com questões ordenadas";
$RandomCategoriesWithRandomQuestionsNoQuestionGrouped = "Categorias aleatórias com questões aleatórias (questões não agrupadas)";
$RandomCategoriesWithQuestionsOrderedNoQuestionGrouped = "Categorias aleatórias com questões ordenadas (questões não agrupadas)";
$RandomCategoriesWithRandomQuestions = "Categorias aleatórias com questões aleatórias";
$OrderedCategoriesAlphabeticallyWithRandomQuestions = "Categorias ordenadas alfabeticamente com questões aleatórias";
$RandomCategoriesWithQuestionsOrdered = "Categorias aleatórias com questões ordenadas";
$OrderedCategoriesAlphabeticallyWithQuestionsOrdered = "Categorias ordenadas alfabeticamente com questões ordenadas";
$UsingCategories = "Categorias utilizadas";
$OrderedByUser = "Ordenadas por utilizador";
$ToReview = "A ser revistas";
$Unanswered = "Sem resposta";
$Answered = "Com resposta";
$CurrentQuestion = "Questão atual";
$MediaQuestions = "Enunciados partilháveis";
$AddedToLPCannotBeAccessed = "O exercício foi incluído na Rota de Aprendizagem, por isso não pode ser acedido diretamente pelos estudantes a partir daqui. Se deseja que um exercício semelhante seja disponibilizado através da ferramenta de exercícios, por favor faça uma cópia do mesmo usando o icon de cópia.";
$Exercice = "Exercício";
$Activate = "Visualizar";
$Deactivate = "Ocultar/esconder";
$NoEx = "Não existe nenhum exercício até ao momento";
$NewEx = "Criar um exercício novo";
$Question = "Questão";
$Questions = "Perguntas";
$Answers = "Respostas";
$True = "Verdadeiro";
$Answer = "Resposta";
$Result = "Resultado";
$NoResult = "Ainda não existem resultados";
$YourResults = "Os seus resultados";
$StudentResults = "Pontuação";
$ExerciseType = "Sequencial";
$ExerciseName = "Nome do exercício";
$ExerciseDescription = "Atribua um contexto ao exercício";
$SimpleExercise = "Todas as perguntas numa única página";
$SequentialExercise = "Uma pergunta por página";
$RandomQuestions = "Perguntas aleatórias";
$GiveExerciseName = "Por favor atribua um nome ao exercício";
$Sound = "Ficheiro de áudio ou de vídeo";
$DeleteSound = "Eliminar o ficheiro de áudio ou de vídeo";
$NoAnswer = "Não existe resposta até ao momento";
$GoBackToQuestionPool = "Regressar ao grupo de perguntas";
$GoBackToQuestionList = "Regressar à lista de perguntas";
$QuestionAnswers = "Respostas à pergunta";
$UsedInSeveralExercises = "Atenção ! Esta pergunta e as suas respostas estão a ser utilizadas em vários exercícios. Deseja editá-las?";
$ModifyInAllExercises = "em todos os exercícios";
$ModifyInThisExercise = "apenas neste exercício";
$AnswerType = "Tipo de resposta";
$MultipleSelect = "Resposta múltipla";
$FillBlanks = "Preencher formulário em branco ou espaços";
$Matching = "Correspondência";
$AddPicture = "Adicionar uma foto";
$ReplacePicture = "Substituir a imagem";
$DeletePicture = "Eliminar foto";
$QuestionDescription = "Melhorar a pergunta";
$GiveQuestion = "Por favor, introduza a pergunta";
$WeightingForEachBlank = "Por favor, indique uma pontuação para cada espaço em branco";
$UseTagForBlank = "utilize parêntesis rectos [...] para definir um ou mais espaços em branco";
$QuestionWeighting = "Pontuação";
$MoreAnswers = "+resp";
$LessAnswers = "-resp";
$MoreElements = "+elem";
$LessElements = "-elem";
$TypeTextBelow = "Por favor, introduza o seu texto abaixo";
$DefaultTextInBlanks = "<table cellspacing=\"0\" cellpadding=\"10\" border=\"1\" width=\"720\" style=\"\" height:=\"\"> <tbody> <tr> <td colspan=\"2\"> <h3>Exemplo de preenchimento do formulário da atividade: calcular o Índice de Massa Corporal</h3> </td> </tr> <tr> <td style=\"text-align: right;\"><strong>Idade</strong></td> <td width=\"75%\" style=\"\">[25] anos</td> </tr> <tr> <td style=\"text-align: right;\"><strong>Sexo</strong></td> <td style=\"\" text-align:=\"\">[M] (M ou F)</td> </tr> <tr> <td style=\"text-align: right;\"><strong>Peso</strong></td> <td style=\"\" text-align:=\"\">95 Kg</td> </tr> <tr> <td style=\"vertical-align: top; text-align: right;\"><strong>Altura</strong></td> <td style=\"vertical-align: top;\">1.81 m</td> </tr> <tr> <td style=\"vertical-align: top; text-align: right;\"><strong>Índice de Massa Corporal</strong></td> <td style=\"vertical-align: top;\">[29] BMI =Peso/Tamanho<sup>2</sup> (Cf.<a href=\"http://en.wikipedia.org/wiki/Body_mass_index\" onclick=\"window.open(this.href,'','resizable=yes,location=yes,menubar=no,scrollbars=yes,status=yes,toolbar=no,fullscreen=no,dependent=no,width=800,height=600,left=40,top=40,status'); return false\"> artigo Wikipedia</a>)</td> </tr> </tbody> </table>";
$DefaultMatchingOptA = "Anote o endereço";
$DefaultMatchingOptB = "Contactar os serviços de emergência";
$DefaultMakeCorrespond1 = "Primeiro passo";
$DefaultMakeCorrespond2 = "Segundo passo";
$DefineOptions = "Por favor defina as opções";
$MakeCorrespond = "Corresponder";
$FillLists = "Por favor, preencha as duas listas abaixo";
$GiveText = "Por favor, introduza o texto";
$DefineBlanks = "Por favor, defina pelo menos um espaço em branco com parêntesis rectos [...]";
$GiveAnswers = "Por favor, introduza as respostas das perguntas";
$ChooseGoodAnswer = "Por favor, verifique a resposta correcta";
$ChooseGoodAnswers = "Por favor, verifique uma ou mais respostas correctas";
$QuestionList = "Lista de perguntas do teste";
$MoveUp = "Mover para cima";
$MoveDown = "Mover para baixo";
$GetExistingQuestion = "Reciclar perguntas existentes";
$FinishTest = "Corrijir o exercício";
$QuestionPool = "Reciclar perguntas existentes";
$OrphanQuestions = "Perguntas orfãs";
$NoQuestion = "Lista de perguntas (não existem perguntas até ao momento).";
$AllExercises = "Todos os exercícios";
$Filter = "Filtro";
$GoBackToEx = "Regressar ao exercício";
$Reuse = "Reutilizar no exercício actual";
$ExerciseManagement = "Gestão dos exercícios";
$QuestionManagement = "Gestão de Perguntas / Respostas";
$QuestionNotFound = "Pergunta não encontrada";
$ExerciseNotFound = "Exercício não encontrado ou não visível";
$AlreadyAnswered = "Já respondeu à pergunta";
$ElementList = "Lista de elementos";
$Score = "Pontuação";
$CorrespondsTo = "Corresponde à";
$ExpectedChoice = "Escolha esperada";
$YourTotalScore = "Pontuação para o exercício";
$ReachedMaxAttemptsAdmin = "Atingiu o máximo número de tentativas para este exercício. Como instrutor, poderá continuar a praticar, mas os Resultados não serão registados.";
$ExerciseAdded = "Exercício adicionado";
$Build = "Construir";
$EvalSet = "Configurações da avaliação";
$Active = "activo";
$Inactive = "inactivo";
$QuestCreate = "Criar perguntas";
$ExRecord = "O seu exercício foi guardado";
$BackModif = "Regressar para a página de edição de perguntas";
$DoEx = "Realizar exercício";
$DefScor = "Descrever as configurações da avaliação";
$CreateModif = "Criar/Editar perguntas";
$Sub = "subtítulo";
$MyAnswer = "Minha resposta";
$MorA = "+ resposta";
$LesA = "- resposta";
$RecEx = "Guardar exercício";
$RecQu = "Adicionar pergunta ao exercício";
$RecAns = "Guardar Respotas";
$Introduction = "Introdução";
$TitleAssistant = "Assistente para a criação de exercícios";
$QuesList = "listas de perguntas";
$SaveEx = "guarda exercícios";
$Finish = "Fechar exercício";
$Cancel = "Cancelar";
$QImage = "Pergunta com uma imagem";
$AddQ = "Adicionar uma pergunta";
$DoAnEx = "Realizar um exercício";
$Generator = "Lista de exercícios";
$Choice = "A sua escolha";
$Correct = "Correcto";
$PossAnsw = "Número de respostas correctas para uma pergunta";
$StudAnsw = "número de erros por aluno";
$Determine = "Determine";
$NonNumber = "um valor não numérico";
$Replaced = "Substituído";
$Superior = "um valor superior a 20";
$Rep20 = "foi introduzido. Foi substituído por 20";
$Default = "Valores pré-definidos *";
$DefComment = "os valores anteriores serão substituídos clicando no botão dos \"Valores pré-definidos\"";
$ScoreGet = "númeração a preto = pontuação";
$ShowScor = "Apresentar a pontuação ao aluno:";
$Step1 = "Passo 1";
$Step2 = "Passo 2";
$Take = "Escolher";
$Among = "entre";
$ImportHotPotatoesQuiz = "Importar HotPotatoes";
$HotPotatoesTests = "Importar exercícios do HotPotatoes";
$DownloadFile = "Enviar ficheiro";
$DownloadImg = "Enviar um ficheiro de imagem para o servidor";
$DownloadEnd = "O envio terminou";
$NoSpace = "O envio falhou. Ou excedeu o máximo de quota, ou não existe espaço suficiente em disco.";
$ZipNoPhp = "O ficheiro zip não pode conter ficheiros .PHP";
$NoImg = "Exercício sem imagens";
$ImgNote_st = "<br> Ainda tem de efectuar o envio";
$ImgNote_en = "imagem(ns) :";
$DocDeleted = "Documento eliminado";
$ViMod = "Visibilidade modificada";
$NameNotEqual = "o ficheiro não é válido !";
$Indice = "Índice";
$Indices = "Índices";
$DateExo = "Data";
$ShowQuestion = "Apresentar pergunta";
$UnknownExercise = "Exercício desconhecido";
$ReuseQuestion = "Reutilizar a pergunta";
$CreateExercise = "Criar um exercício";
$CreateQuestion = "Criar uma pergunta";
$CreateAnswers = "Criar respostas";
$ModifyExercise = "Editar o nome e configurações do exercício";
$ModifyAnswers = "Editar respostas";
$ForExercise = "para o exercício";
$UseExistantQuestion = "Utilizar uma pergunta existente";
$FreeAnswer = "Pergunta em aberto";
$notCorrectedYet = "Esta resposta ainda não foi corrigida. Entretanto, a pontuação para esta pergunta está definida para 0, afectando o total da pontuação.";
$adminHP = "Hot Potatoes Admin";
$NewQu = "Pergunta nova";
$NoImage = "Por favor seleccione uma imagem";
$AnswerHotspot = "A descrição e a pontuação são obrigatórios para cada hotspot - o feedback é opcional";
$MinHotspot = "Tem de criar pelo menos um (1) hotspot.";
$MaxHotspot = "O número máximo de hotspots que pode criar é doze (12).";
$HotspotError = "Por favor atribua uma descrição e uma ponderação para cada hotspot.";
$MoreHotspots = "Adicionar hotspot (ponto de contacto)";
$LessHotspots = "Remover hotspot";
$HotspotZones = "Áreas de imagem (hotspot)";
$NextQuestion = "Pergunta seguinte";
$CorrectAnswer = "Resposta correcta";
$HotspotHit = "A sua resposta foi";
$OnlyJPG = "Para hotspots só pode utilizar imagens JPG (ou JPEG)";
$FinishThisTest = "Apresentar as respostas correctas para cada pergunta e a pontuação do exercício";
$AllQuestions = "Todas as questões";
$ModifyTitleDescription = "Editar título e descrição";
$ModifyHotspots = "Editar respostas/hotspots";
$HotspotNotDrawn = "Ainda não desenhou todos os hotspots";
$HotspotWeightingError = "Deve de atribuir um resultado positivo para cada hotspot";
$HotspotValidateError1 = "Deve responder completamente à pergunta (";
$HotspotValidateError2 = "é necessário clicar(s) na imagem), antes de poder visualizar os resultados";
$HotspotRequired = "A descrição e a pontuação são obrigatórios para cada hotspot. O feedback é opcional.";
$HotspotChoose = "Para criar um hotspot: selecionar uma forma de polígono ao lado da cor, e desenhar o hotspot.<br>Para mover um hotspot, selecionar a cor, clicar num outro ponto da imagem, e desenhar o hotspot.<br>Para adicionar um hotspot: clicar no botão Adicionar hotspot.<br>Para fechar uma forma de polígono: clicar no botão direito do rato e seleccionar Fechar polígono.</br>";
$Fault = "Incorrecto";
$HotSpot = "Áreas de imagem (hotspot)";
$ClickNumber = "Número de cliques";
$HotspotGiveAnswers = "Por favor, dê uma resposta";
$Addlimits = "Adicionar limites";
$AreYouSure = "Tem a certeza";
$StudentScore = "Pontuação do aluno";
$backtoTesthome = "Regressar à página inicial dos exercícios";
$Feedback = "Feedback";
$MarkIsUpdated = "o limite foi actualizado";
$MarkInserted = "Limite inserido";
$PleaseGiveAMark = "Por favor, atribua um limite";
$EditCommentsAndMarks = "Editar feedback individual e pontuar a pergunta em aberto";
$AddComments = "Adicionar feedback individual";
$Number = "Nº";
$Weighting = "Pontuação";
$ChooseQuestionType = "Para criar uma nova pergunta, seleccionar acima o tipo de pergunta";
$MatchesTo = "Corresponder a";
$CorrectTest = "Mais detalhes";
$ViewTest = "Visualizar";
$State = "Estado/status do portal";
$NotAttempted = "Não acedido/não tentado";
$AddElem = "Adicionar elemento";
$DelElem = "Remover elemento";
$PlusAnswer = "Adicionar a opção da resposta";
$LessAnswer = "Remover a opção da resposta";
$YourScore = "A sua pontuação";
$Attempted = "Acedido/tentado";
$AssignMarks = "Atribuir um limite";
$Results = "Resultados e feedback";
$ExerciseStored = "Prossiga clicando no tipo de pergunta e em seguida, introduza as informações apropriadas.";
$ChooseAtLeastOneCheckbox = "Escolha pelo menos uma resposta correcta";
$ExerciseEdited = "O nome e as configurações do exercício foram guardados.";
$ExerciseDeleted = "O exercício foi eliminado";
$ClickToCommentAndGiveFeedback = "Clique na seguinte link/ligação para verificar a resposta e atribuir feedback";
$OpenQuestionsAttempted = "Um aluno respondeu a uma pergunta em aberto";
$AttemptDetails = "Detalhes dos acessos/tentativas";
$TestAttempted = "Exercício acedido/tentado";
$StudentName = "Nome do aluno";
$StudentEmail = "Email do aluno";
$OpenQuestionsAttemptedAre = "A pergunta em aberto acedida/tentada é";
$CourseName = "Nome do curso";
$UploadJpgPicture = "Enviar imagem (jpg, png or gif) para aplicar em hotspots.";
$HotspotDescription = "Agora clique em : (...)";
$ExamSheetVCC = "Folha de Exame visualizada/corrigida/comentada pelo instrutor";
$AttemptVCC = "O seguinte acesso/tentativa foi visualizada/comentada/corrigida pelo instrutor";
$ClickLinkToViewComment = "Clique no link/ligação abaixo para aceder à sua conta e visualizar os comentários à sua Folha de Exame.";
$Regards = "Cumprimentos";
$AttemptVCCLong = "O seu acesso/tentativa para o exercício %s foi visualizadas/comentada/corrigida pelo instrutor. Clique no link/ligação abaixo para aceder à sua conta e visualizar a sua Folha de Exame.";
$DearStudentEmailIntroduction = "Caro(a) aluno(a),";
$ExerciseFinished = "Exercício Concluído";
$ResultsEnabled = "Resultados permitidos para os alunos";
$ResultsDisabled = "Resultados bloqueados para os alunos";
$ExportWithUserFields = "Incluir perfil";
$ExportWithoutUserFields = "Excluir perfil";
$DisableResults = "Não apresentar resultados";
$EnableResults = "Apresentar resultados aos alunos";
$ValidateAnswer = "Validar respostas";
$FillInBlankSwitchable = "Permitir a troca de ordem das respostas";
$ReachedMaxAttempts = "Não pode realizar o exercício <b>%s</b> porque já atingiu o máximo de %s  tentativas.";
$AdvancedParameters = "Configurações avançadas";
$RandomQuestionsToDisplay = "Número de perguntas aleatórias a mostrar";
$RandomQuestionsHelp = "Para ordenar aleatoriamente todas as perguntas seleccione 10. Para desativar a ordenação aleatória, seleccione \"Não ordenar aleatoriamente\".";
$ExerciseAttempts = "Número máximo de tentativas";
$DoNotRandomize = "Não ordenar aleatoriamente";
$Infinite = "Infinito";
$BackToExercisesList = "Regressar para a ferramenta de Exercícios";
$ViewScoreChangeHistory = "Visualizar histórico de alterações da pontuação";
$NoStartDate = "Sem data de início";
$NoLogOfDuration = "Sem registo de duração";
$EnableTimeLimits = "Impor limite de calendário";
$ExeStartTime = "Data de início";
$ExeEndTime = "Data de conclusão";
$Value = "Valor";
$DeleteAttempt = "Eliminar tentativa?";
$WithoutComment = "Sem comentários";
$QuantityQuestions = "Perguntas";
$FilterExercices = "Filtrar exercícios";
$FilterByNotRevised = "Apenas não qualificados/inaptos";
$FilterByRevised = "Apenas qualificados/aptos";
$Duration = "Duração";
$ReachedTimeLimit = "Tempo limite atingido";
$TryAgain = "Tentar novamente";
$SeeTheory = "Ligação/link para a Teoria";
$EndActivity = "Fim da actividade";
$NoFeedback = "Exame (sem feedback)";
$DirectFeedback = "Auto-avaliação (feedback imediato)";
$FeedbackType = "Feedback";
$Scenario = "Cenário";
$VisitUrl = "Visite esta ligação/link";
$ExitTest = "Sair do exercício";
$DurationFormat = "%1 segundos";
$Difficulty = "Dificuldade";
$NewScore = "Nova pontuação";
$NewComment = "Novo comentário";
$ExerciseNoStartedYet = "O exercício ainda não começou";
$ExerciseNoStartedAdmin = "O instrutor ainda não autorizou o início do exercício";
$SelectTargetLP = "Seleccione o curso destino";
$SelectTargetQuestion = "Seleccione a pergunta destino";
$DirectFeedbackCantModifyTypeQuestion = "O tipo de exercício não pode ser modificado, uma vez que foi configurado para ser uma auto-avaliação. A auto-avaliação permite a possibilidade de atribuir feedback directo ao utilizador, mas não é compatível com todos os tipos de perguntas, não sendo possível alterar posteriormente este tipo de exercício.";
$CantShowResults = "Não disponível";
$CantViewResults = "Os resultados não podem ser visualizados";
$ShowCorrectedOnly = "Com feedback individual";
$ShowUnCorrectedOnly = "Resultados não corrigidos";
$HideResultsToStudents = "Ocultar resultados";
$ShowResultsToStudents = "Apresentar pontuação ao aluno";
$ProcedToQuestions = "Continuar para as perguntas";
$AddQuestionToExercise = "Adicionar esta pergunta ao exercício";
$PresentationQuestions = "Mostrar";
$UniqueAnswer = "Escolha múltipla";
$MultipleAnswer = "Respostas múltipla";
$ReachedOneAttempt = "Não pode voltar a realizar este exercício, porque já atingiu uma tentativa";
$QuestionsPerPage = "Perguntas por página";
$QuestionsPerPageOne = "Uma";
$QuestionsPerPageAll = "Todas";
$EditIndividualComment = "Editar feedback individual";
$ThankYouForPassingTheTest = "Obrigado por ter passado no exercício";
$ExerciseAtTheEndOfTheTest = "No final do exercício";
$EnrichQuestion = "Melhorar a pergunta";
$DefaultUniqueQuestion = "Seleccione a razão correcta";
$DefaultUniqueAnswer1 = "A depois B depois C";
$DefaultUniqueComment1 = "O leite é a base de muitos produtos diários, como a manteiga, o queijo, o iogurte, entre outros";
$DefaultUniqueAnswer2 = "A depois C depois B";
$DefaultUniqueComment2 = "A aveia é um dos cereais mais abrangentes. Devido à sua energia e qualidades nutricionais tem sido a base da alimentação pessoas";
$DefaultMultipleQuestion = "O marasmo é uma consequência da";
$DefaultMultipleAnswer1 = "Falta de Cálcio";
$DefaultMultipleComment1 = "O cálcio atua como um ...";
$DefaultMultipleAnswer2 = "Falta de Vitamina A";
$DefaultMultipleComment2 = "A vitamina A é responsável por ...";
$DefaultFillBlankQuestion = "Calcule o Ídice de Massa Corporal";
$DefaultMathingQuestion = "Ordene as operações";
$DefaultOpenQuestion = "Indique o que considera serem as 10 principais qualidades de um bom gestor de projecto?";
$MoreHotspotsImage = "Adicionar/editar hotspots na imagem";
$ReachedTimeLimitAdmin = "Atingido o tempo limite de admin";
$LastScoreTest = "Última pontuação de um exercício";
$BackToResultList = "Regressar à lista de resultados";
$EditingScoreCauseProblemsToExercisesInLP = "Se editar a pontuação de uma pergunta, por favor lembre-se de que este exercício foi adicionado num Curso";
$SelectExercice = "Seleccione o exercício";
$YouHaveToSelectATest = "Tem de seleccionar um exercício";
$HotspotDelineation = "Deliniação do hotspot";
$CreateQuestions = "Criar perguntas";
$MoreOAR = "Mais áreas em risco";
$LessOAR = "Menos áreas em risco";
$LearnerIsInformed = "Esta mensagem, tal como a tabela de resultados, serão apresentadas ao aluno se saltar este passo";
$MinOverlap = "Sobreposição mínima";
$MaxExcess = "Máximo em excesso";
$MaxMissing = "Máximo em falta";
$IfNoError = "Se não houver nenhum erro";
$LearnerHasNoMistake = "O aluno não cometeu nenhum erro";
$YourAnswer = "A sua resposta";
$YourDelineation = "A sua delineação :";
$ResultIs = "O seu resultado é :";
$Overlap = "Área de sobreposição";
$Missing = "Área em falta";
$Excess = "Área em excesso";
$Min = "Mínimo";
$Max = "Máximo";
$Requirements = "Requisitos";
$OARHit = "Uma (ou mais) área em risco foi atingida";
$TooManyIterationsPleaseTryUsingMoreStraightforwardPolygons = "Demasiadas iterações ao calcular a sua resposta. Por favor, tente desenhar a sua delineação de uma maneira mais simples";
$Thresholds = "Limitações";
$Delineation = "Delineação";
$QuestionTypeDoesNotBelongToFeedbackTypeInExercise = "O tipo de pergunta não corresponde ao tipo de feedback no exercício";
$XResultsCleaned = "%d resultados apagados";
$AreYouSureToDeleteResults = "Tem a certeza de que deseja apagar os resultados?";
$ExerciseCopied = "Exercício copiado";
$AreYouSureToCopy = "Tem a certeza de que deseja copiar?";
$EditingExerciseCauseProblemsInLP = "A edição do exercício causou problemas na Rota de Aprendizagem";
$ExerciseWithFeedbackWithoutCorrectionComment = "Nota: Este teste foi configurado para ocultar as respostas corretas";
$SessionIsReadOnly = "A sessão é apenas de leitura";
$EnableTimerControl = "Activar controlo de tempo";
$ExerciseTotalDurationInMinutes = "Tempo total em minutos de duração do exercício";
$ToContinueUseMenu = "Para continuar neste curso, por favor utilize o menu lateral.";
$RandomAnswers = "Misturar respostas";
$NotMarkActivity = "A atividade não pode ser avaliada";
$YouHaveToCreateAtLeastOneAnswer = "Tem de criar pelo menos uma resposta";
$ExerciseAttempted = "Um estudante realizou um exercício";
$MultipleSelectCombination = "Seleção correta";
$MultipleAnswerCombination = "Combinação correta de respostas";
$ExerciceExpiredTimeMessage = "O tempo disponível para o exercício terminou";
$AllQuestionsMustHaveACategory = "Todas as questões devem ter uma categoria para se poder usar o modo de Categorias aleatórias";
$NoMedia = "Nenhuma ligação a arquivos media";
$AttachToMedia = "Anexar ao arquivo media";
$ExamModeWithFinalScoreShowOnlyFinalScoreWithCategoriesIfAvailable = "Mostrar apenas o resultado final, com as categorias (se disponíveis)";
$Media = "Media";
$ForceEditingExerciseInLPWarning = "Está autorizado a editar este exercício, apesar de já ter sido utilizado na Rota de Aprendizagem. Se o editar, tente evitar alterar os resultados e objetivos previstos nos conteúdos do mesmo, de modo a evitar que afete resultados já obtidos por outros utilizadores que tenham feito o exercício em causa";
$CopyExercise = "Copiar este exercício como um exercício novo";
$CleanStudentResults = "Apagar todos os resultados dos alunos neste exercício";
$ImportQtiQuiz = "Importar exrecícios Qti2";
$ReUseACopyInCurrentTest = "Reutilizar uma cópia dentro do teste atual";
$Copy = "Copiar";
$QuestionGlobalCategory = "Categoria global";
$CheckThatYouHaveEnoughQuestionsInYourCategories = "Verifique se tem questões suficientes nas categorias disponíveis.";
$ScoreAverageFromAllAttempts = "Pontuação média de todas as tentativas";
$DefaultContent = "Gerar conteúdo padrão";
$OralQuestionsAttemptedAreX = "Foram feitas %s tentativas em questões orais";
$OralQuestionsAttempted = "Um estudante tentou pelo menos responder a uma ou mais questões orais";
$RelativeScore = "Pontuação relativa";
$AbsoluteScore = "Resultado final";
$EditQuestions = "Editar questões";
$ExerciseDescriptionLabel = "Descrição";
$ExerciseEditionNotAvailableInSession = "Não pode editar este exercício do curso dentro de uma sessão";
$UniqueAnswerNoOption = "Resposta única desconhecida";
$MultipleAnswerTrueFalse = "Resposta múltipla verdadeira/falsa/não sei";
$MultipleAnswerCombinationTrueFalse = "Combinação verdadeira/falsa/não sei";
$DontKnow = "Não sei";
$False = "Falso";
$DoubtScore = "Não sei";
$HotSpotDelineation = "Delineamento Hotspot";
$PropagateNegativeResults = "Propagar resultados negativos entre as questões";
$InsertALinkToThisQuestionInTheExercise = "Use esta questão no teste como uma ligação/link (não uma cópia)";
$OnlyShowScore = "Modo de treino: mostrar apenas o resultado, por categoria se pelo menos uma for utilizada";
$ImportExcelQuiz = "Importar Quiz do Excel";
$DownloadExcelTemplate = "Descarregar o modelo Excel";
$ExerciseWillBeActivatedFromXToY = "O exercício será ativado desde %s até %s";
$EnableStartTime = "Ativar a hora de início";
$EnableEndTime = "Ativar o tempo final";
$ExerciseAvailableFromX = "Exercício disponível a partir de %s";
$ExerciseAvailableUntilX = "Exercício disponível até %s";
$TestLimitsAdded = "Limite de testes adicionado";
$AddLimits = "Adicionar limites";
$Unlimited = "Ilimitado";
$LimitedTime = "Por tempo limitado";
$LimitedAttempts = "Tentativas limitadas";
$Times = "Tentativas";
$Random = "Aleatório";
$ExerciseTimerControlMinutes = "Ativar exercícios com controle de tempo";
$Numeric = "Numérico";
$Acceptable = "Razoável";
$Hotspot = "Hotspot";
$ChangeTheVisibilityOfTheCurrentImage = "Alterar a visibilidade da imagem atual";
$Steps = "Etapas";
$OriginalValue = "Valor original";
$ChooseAnAnswer = "Escolha uma resposta";
$ImportExercise = "Importar exercício";
$MultipleChoiceMultipleAnswers = "Escolha múltipla, várias respostas";
$MultipleChoiceUniqueAnswer = "Escolha múltipla, apenas uma resposta";
$HotPotatoesFiles = "Ficheiros HotPotatoes";
$HotPotatoes = "HotPotatoes";
$OAR = "Área a evitar";
$TotalScoreTooBig = "A pontuação total é demasiado grande";
$InvalidQuestionType = "Tipo de questão inválida";
$ShowScoreAndRightAnswer = "Modo de auto-avaliação: exibir pontuação e respostas esperadas";
$DoNotShowScoreNorRightAnswer = "Modo exame: não exibir pontuação, nem respostas";
$LoadUsersExtraData = "Carregar dados extras dos utilizadores";
$StartTest = "Iniciar teste";
$SaveForNow = "Guardar e continuar";
$QuestionsToReview = "Questões a serem revistas";
$QuestionWithNoAnswer = "Questões sem respostas";
$ValidateAnswers = "Validar respostas";
$ReviewQuestions = "Rever as questões selecionadas";
$YouTriedToResolveThisExerciseEarlier = "Já tentou resolver este exercício anteriormente";
$ThereAreNoQuestionsForThisExercise = "Não há questões neste exercício";
$ContinueTest = "Continuar com o teste";
$XQuestionsWithTotalScoreY = "%d questões, para um resultado total (todas as questões) de  %s";
$QuestionLowerCase = "Questão";
$QuestionsLowerCase = "Questões";
$Category = "Categoria";
$BackToTestList = "Regressar à lista de testes";
$CategoryDescription = "Descrição da categoria";
$BackToCategoryList = "Regressar à lista de categorias";
$AddCategoryNameAlreadyExists = "O nome desta categoria já existe. Por favor utilize outro nome.";
$CannotDeleteCategory = "Não pode apagar esta categoria";
$CannotDeleteCategoryError = "Erro: não foi possível apagar a categoria";
$CannotEditCategory = "Não foi possível editar a categoria";
$ModifyCategory = "Modificar categoria";
$ModifyCategoryError = "Não foi possível atualizar a categoria";
$AllCategories = "Todas as categorias";
$AllGroups = "Todos os grupos";
$FilterByGroup = "Filtrar por grupo";
$CreateQuestionOutsideExercice = "Criar pergunta fora do exercício";
$ChoiceQuestionType = "Escolher o tipo de pergunta";
$YesWithCategoriesSorted = "Sim, com categorias ordenadas";
$YesWithCategoriesShuffled = "Sim, com categorias misturadas";
$ManageAllQuestions = "Gerir todas as perguntas";
$MustBeInATest = "Tem de estar num teste";
$PleaseSelectSomeRandomQuestion = "Por favor, selecione uma pergunta aleatória";
$RemoveFromTest = "Eliminar do teste";
$AddQuestionToTest = "Adicionar pergunta ao teste";
$QuestionByCategory = "Questão por categoria";
$QuestionUpperCaseFirstLetter = "Questão";
$QuestionCategory = "Categoria das questões";
$AddACategory = "Adicionar categoria";
$CategoryName = "Nome de categoria";
$AddTestCategory = "Adicionar categoria de teste";
$AddCategoryDone = "Categoria adicionada";
$NbCategory = "Categorias Nb";
$DeleteCategoryAreYouSure = "Tem a certeza de que quer eliminar esta categoria?";
$DeleteCategoryDone = "Categoria eliminada";
$EditCategory = "Editar categoria";
$MofidfyCategoryDone = "Categoria atualizada";
$NoCategory = "Sem categoria";
$NotInAGroup = "Não está num grupo";
$DoFilter = "Filtrar";
$ByCategory = "Por categoria";
$ResultsNotRevised = "Resultados não revistos";
$ResultNotRevised = "Resultado não revisto";
$NumberOfStudentsWhoTryTheExercise = "Número de alunos que tentaram o exercício";
$LowestScore = "Pontuação mais baixa";
$HighestScore = "Pontuação mais alta";
$MaximumScore = "Pontuação máxima";
$NotRevised = "Sem revisão";
$PreviousQuestion = "Questão anterior";
$Options = "Opções";
$RandomQuestionByCategory = "Questões aleatórias por categoria";
$QuestionDisplayCategoryName = "Mostrar categoria de questões";
$ReviewAnswers = "Rever as minhas respostas";
$TextWhenFinished = "Texto que aparecerá no final da prova";
$Validated = "Validado";
$NotValidated = "Não validado";
$Revised = "Revisto";
$SelectAQuestionToReview = "Selecione uma questão para rever";
$ReviewQuestionLater = "Rever a pergunta mais tarde";
$NumberStudentWhoSelectedIt = "Número de alumnos que a selecionaram";
$QuestionsAlreadyAnswered = "Questões já respondidas";
$StudentsWhoAreTakingTheExerciseRightNow = "Alunos que estão fazendo o exercício agora";
$ReportByQuestion = "Relatório por questão";
$LiveResults = "Resultados ao vivo";
$RecordAnswer = "Gravar resposta";
$UseTheMessageBelowToAddSomeComments = "Usar a seguinte mensagem para adicionar um comentário";
$SendRecord = "Enviar gravação";
$DownloadLatestRecord = "Descarregar gravação";
$OralExpression = "Expressão oral";
$CongratulationsYouPassedTheTest = "Parabéns! Passou no teste!";
$YouDidNotReachTheMinimumScore = "Não atingiu a pontuação mínima";
$EndTest = "Finalizar teste";
$PassPercentage = "Percentagem para passar";
$NoCategorySelected = "Nenhuma categoria selecionada";
$ExerciseAverage = "Média no exercício";
$NoNegativeScore = "Sem pontuação negativa";
$GlobalMultipleAnswer = "Resposta múltipla global";
$AllQuestionsShort = "Todas";
$ProblemsRecordingUploadYourOwnAudioFile = "Problemas a gravar? Envie o seu próprio ficheiro de áudio.";
?>