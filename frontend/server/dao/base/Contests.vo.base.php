<?php
/** Value Object file for table Contests.
  * 
  * VO does not have any behaviour except for storage and retrieval of its own data (accessors and mutators).
  * @author alan@caffeina.mx
  * @access public
  * @package docs
  * 
  */

class Contests extends VO
{
	/**
	  * Constructor de Contests
	  * 
	  * Para construir un objeto de tipo Contests debera llamarse a el constructor 
	  * sin parametros. Es posible, construir un objeto pasando como parametro un arreglo asociativo 
	  * cuyos campos son iguales a las variables que constituyen a este objeto.
	  * @return Contests
	  */
	function __construct( $data = NULL)
	{ 
		if(isset($data))
		{
			if( isset($data['contest_id']) ){
				$this->contest_id = $data['contest_id'];
			}
			if( isset($data['title']) ){
				$this->title = $data['title'];
			}
			if( isset($data['description']) ){
				$this->description = $data['description'];
			}
			if( isset($data['start_time']) ){
				$this->start_time = $data['start_time'];
			}
			if( isset($data['finish_time']) ){
				$this->finish_time = $data['finish_time'];
			}
			if( isset($data['window_length']) ){
				$this->window_length = $data['window_length'];
			}
			if( isset($data['director_id']) ){
				$this->director_id = $data['director_id'];
			}
			if( isset($data['rerun_id']) ){
				$this->rerun_id = $data['rerun_id'];
			}
			if( isset($data['public']) ){
				$this->public = $data['public'];
			}
			if( isset($data['token']) ){
				$this->token = $data['token'];
			}
			if( isset($data['scoreboard']) ){
				$this->scoreboard = $data['scoreboard'];
			}
			if( isset($data['partial_score']) ){
				$this->partial_score = $data['partial_score'];
			}
			if( isset($data['submissions_gap']) ){
				$this->submissions_gap = $data['submissions_gap'];
			}
			if( isset($data['feedback']) ){
				$this->feedback = $data['feedback'];
			}
			if( isset($data['penalty']) ){
				$this->penalty = $data['penalty'];
			}
			if( isset($data['time_start']) ){
				$this->time_start = $data['time_start'];
			}
		}
	}

	/**
	  * Obtener una representacion en String
	  * 
	  * Este metodo permite tratar a un objeto Contests en forma de cadena.
	  * La representacion de este objeto en cadena es la forma JSON (JavaScript Object Notation) para este objeto.
	  * @return String 
	  */
	public function __toString( )
	{ 
		$vec = array( 
			"contest_id" => $this->contest_id,
			"title" => $this->title,
			"description" => $this->description,
			"start_time" => $this->start_time,
			"finish_time" => $this->finish_time,
			"window_length" => $this->window_length,
			"director_id" => $this->director_id,
			"rerun_id" => $this->rerun_id,
			"public" => $this->public,
			"token" => $this->token,
			"scoreboard" => $this->scoreboard,
			"partial_score" => $this->partial_score,
			"submissions_gap" => $this->submissions_gap,
			"feedback" => $this->feedback,
			"penalty" => $this->penalty,
			"time_start" => $this->time_start
		); 
	return json_encode($vec); 
	}
	
	/**
	  * contest_id
	  * 
	  * El identificador unico para cada concurso<br>
	  * <b>Llave Primaria</b><br>
	  * <b>Auto Incremento</b><br>
	  * @access protected
	  * @var int(11)
	  */
	protected $contest_id;

	/**
	  * title
	  * 
	  * El titulo que aparecera en cada concurso<br>
	  * @access protected
	  * @var varchar(256)
	  */
	protected $title;

	/**
	  * description
	  * 
	  * Una breve descripcion de cada concurso.<br>
	  * @access protected
	  * @var tinytext
	  */
	protected $description;

	/**
	  * start_time
	  * 
	  * Hora de inicio de este concurso<br>
	  * @access protected
	  * @var timestamp
	  */
	protected $start_time;

	/**
	  * finish_time
	  * 
	  * Hora de finalizacion de este concurso<br>
	  * @access protected
	  * @var timestamp
	  */
	protected $finish_time;

	/**
	  * window_length
	  * 
	  * Indica el tiempo que tiene el usuario para envíar solución, si es NULL entonces será durante todo el tiempo del concurso<br>
	  * @access protected
	  * @var int(11)
	  */
	protected $window_length;

	/**
	  * director_id
	  * 
	  * el userID del usuario que creo este concurso<br>
	  * @access protected
	  * @var int(11)
	  */
	protected $director_id;

	/**
	  * rerun_id
	  * 
	  * Este campo es para las repeticiones de algún concurso<br>
	  * @access protected
	  * @var int(11)
	  */
	protected $rerun_id;

	/**
	  * public
	  * 
	  * False implica concurso cerrado, ver la tabla ConcursantesConcurso<br>
	  * @access protected
	  * @var tinyint(1)
	  */
	protected $public;

	/**
	  * token
	  * 
	  * Almacenará el token necesario para acceder al concurso<br>
	  * @access protected
	  * @var varchar(20)
	  */
	protected $token;

	/**
	  * scoreboard
	  * 
	  * Entero del 0 al 100, indicando el porcentaje de tiempo que el scoreboard será visible<br>
	  * @access protected
	  * @var int(11)
	  */
	protected $scoreboard;

	/**
	  * partial_score
	  * 
	  * Verdadero si el usuario recibirá puntaje parcial para problemas no resueltos en todos los casos<br>
	  * @access protected
	  * @var tinyint(1)
	  */
	protected $partial_score;

	/**
	  * submissions_gap
	  * 
	  * Tiempo mínimo en segundos que debe de esperar un usuario despues de realizar un envío para hacer otro<br>
	  * @access protected
	  * @var int(11)
	  */
	protected $submissions_gap;

	/**
	  * feedback
	  * 
	  *  [Campo no documentado]<br>
	  * @access protected
	  * @var enum('no','yes','partial')
	  */
	protected $feedback;

	/**
	  * penalty
	  * 
	  * Entero indicando el número de minutos con que se penaliza por recibir un no-accepted<br>
	  * @access protected
	  * @var int(11)
	  */
	protected $penalty;

	/**
	  * time_start
	  * 
	  * Indica el momento cuando se inicia a contar el timpo: cuando inicia el concurso o cuando se abre el problema<br>
	  * @access protected
	  * @var enum('contest','problem')
	  */
	protected $time_start;

	/**
	  * getContestId
	  * 
	  * Get the <i>contest_id</i> property for this object. Donde <i>contest_id</i> es El identificador unico para cada concurso
	  * @return int(11)
	  */
	final public function getContestId()
	{
		return $this->contest_id;
	}

	/**
	  * setContestId( $contest_id )
	  * 
	  * Set the <i>contest_id</i> property for this object. Donde <i>contest_id</i> es El identificador unico para cada concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>contest_id</i> es de tipo <i>int(11)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * <br><br>Esta propiedad se mapea con un campo que es de <b>Auto Incremento</b> !<br>
	  * No deberias usar setContestId( ) a menos que sepas exactamente lo que estas haciendo.<br>
	  * <br><br>Esta propiedad se mapea con un campo que es una <b>Llave Primaria</b> !<br>
	  * No deberias usar setContestId( ) a menos que sepas exactamente lo que estas haciendo.<br>
	  * @param int(11)
	  */
	final public function setContestId( $contest_id )
	{
		$this->contest_id = $contest_id;
	}

	/**
	  * getTitle
	  * 
	  * Get the <i>title</i> property for this object. Donde <i>title</i> es El titulo que aparecera en cada concurso
	  * @return varchar(256)
	  */
	final public function getTitle()
	{
		return $this->title;
	}

	/**
	  * setTitle( $title )
	  * 
	  * Set the <i>title</i> property for this object. Donde <i>title</i> es El titulo que aparecera en cada concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>title</i> es de tipo <i>varchar(256)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param varchar(256)
	  */
	final public function setTitle( $title )
	{
		$this->title = $title;
	}

	/**
	  * getDescription
	  * 
	  * Get the <i>description</i> property for this object. Donde <i>description</i> es Una breve descripcion de cada concurso.
	  * @return tinytext
	  */
	final public function getDescription()
	{
		return $this->description;
	}

	/**
	  * setDescription( $description )
	  * 
	  * Set the <i>description</i> property for this object. Donde <i>description</i> es Una breve descripcion de cada concurso..
	  * Una validacion basica se hara aqui para comprobar que <i>description</i> es de tipo <i>tinytext</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param tinytext
	  */
	final public function setDescription( $description )
	{
		$this->description = $description;
	}

	/**
	  * getStartTime
	  * 
	  * Get the <i>start_time</i> property for this object. Donde <i>start_time</i> es Hora de inicio de este concurso
	  * @return timestamp
	  */
	final public function getStartTime()
	{
		return $this->start_time;
	}

	/**
	  * setStartTime( $start_time )
	  * 
	  * Set the <i>start_time</i> property for this object. Donde <i>start_time</i> es Hora de inicio de este concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>start_time</i> es de tipo <i>timestamp</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param timestamp
	  */
	final public function setStartTime( $start_time )
	{
		$this->start_time = $start_time;
	}

	/**
	  * getFinishTime
	  * 
	  * Get the <i>finish_time</i> property for this object. Donde <i>finish_time</i> es Hora de finalizacion de este concurso
	  * @return timestamp
	  */
	final public function getFinishTime()
	{
		return $this->finish_time;
	}

	/**
	  * setFinishTime( $finish_time )
	  * 
	  * Set the <i>finish_time</i> property for this object. Donde <i>finish_time</i> es Hora de finalizacion de este concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>finish_time</i> es de tipo <i>timestamp</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param timestamp
	  */
	final public function setFinishTime( $finish_time )
	{
		$this->finish_time = $finish_time;
	}

	/**
	  * getWindowLength
	  * 
	  * Get the <i>window_length</i> property for this object. Donde <i>window_length</i> es Indica el tiempo que tiene el usuario para envíar solución, si es NULL entonces será durante todo el tiempo del concurso
	  * @return int(11)
	  */
	final public function getWindowLength()
	{
		return $this->window_length;
	}

	/**
	  * setWindowLength( $window_length )
	  * 
	  * Set the <i>window_length</i> property for this object. Donde <i>window_length</i> es Indica el tiempo que tiene el usuario para envíar solución, si es NULL entonces será durante todo el tiempo del concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>window_length</i> es de tipo <i>int(11)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param int(11)
	  */
	final public function setWindowLength( $window_length )
	{
		$this->window_length = $window_length;
	}

	/**
	  * getDirectorId
	  * 
	  * Get the <i>director_id</i> property for this object. Donde <i>director_id</i> es el userID del usuario que creo este concurso
	  * @return int(11)
	  */
	final public function getDirectorId()
	{
		return $this->director_id;
	}

	/**
	  * setDirectorId( $director_id )
	  * 
	  * Set the <i>director_id</i> property for this object. Donde <i>director_id</i> es el userID del usuario que creo este concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>director_id</i> es de tipo <i>int(11)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param int(11)
	  */
	final public function setDirectorId( $director_id )
	{
		$this->director_id = $director_id;
	}

	/**
	  * getRerunId
	  * 
	  * Get the <i>rerun_id</i> property for this object. Donde <i>rerun_id</i> es Este campo es para las repeticiones de algún concurso
	  * @return int(11)
	  */
	final public function getRerunId()
	{
		return $this->rerun_id;
	}

	/**
	  * setRerunId( $rerun_id )
	  * 
	  * Set the <i>rerun_id</i> property for this object. Donde <i>rerun_id</i> es Este campo es para las repeticiones de algún concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>rerun_id</i> es de tipo <i>int(11)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param int(11)
	  */
	final public function setRerunId( $rerun_id )
	{
		$this->rerun_id = $rerun_id;
	}

	/**
	  * getPublic
	  * 
	  * Get the <i>public</i> property for this object. Donde <i>public</i> es False implica concurso cerrado, ver la tabla ConcursantesConcurso
	  * @return tinyint(1)
	  */
	final public function getPublic()
	{
		return $this->public;
	}

	/**
	  * setPublic( $public )
	  * 
	  * Set the <i>public</i> property for this object. Donde <i>public</i> es False implica concurso cerrado, ver la tabla ConcursantesConcurso.
	  * Una validacion basica se hara aqui para comprobar que <i>public</i> es de tipo <i>tinyint(1)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param tinyint(1)
	  */
	final public function setPublic( $public )
	{
		$this->public = $public;
	}

	/**
	  * getToken
	  * 
	  * Get the <i>token</i> property for this object. Donde <i>token</i> es Almacenará el token necesario para acceder al concurso
	  * @return varchar(20)
	  */
	final public function getToken()
	{
		return $this->token;
	}

	/**
	  * setToken( $token )
	  * 
	  * Set the <i>token</i> property for this object. Donde <i>token</i> es Almacenará el token necesario para acceder al concurso.
	  * Una validacion basica se hara aqui para comprobar que <i>token</i> es de tipo <i>varchar(20)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param varchar(20)
	  */
	final public function setToken( $token )
	{
		$this->token = $token;
	}

	/**
	  * getScoreboard
	  * 
	  * Get the <i>scoreboard</i> property for this object. Donde <i>scoreboard</i> es Entero del 0 al 100, indicando el porcentaje de tiempo que el scoreboard será visible
	  * @return int(11)
	  */
	final public function getScoreboard()
	{
		return $this->scoreboard;
	}

	/**
	  * setScoreboard( $scoreboard )
	  * 
	  * Set the <i>scoreboard</i> property for this object. Donde <i>scoreboard</i> es Entero del 0 al 100, indicando el porcentaje de tiempo que el scoreboard será visible.
	  * Una validacion basica se hara aqui para comprobar que <i>scoreboard</i> es de tipo <i>int(11)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param int(11)
	  */
	final public function setScoreboard( $scoreboard )
	{
		$this->scoreboard = $scoreboard;
	}

	/**
	  * getPartialScore
	  * 
	  * Get the <i>partial_score</i> property for this object. Donde <i>partial_score</i> es Verdadero si el usuario recibirá puntaje parcial para problemas no resueltos en todos los casos
	  * @return tinyint(1)
	  */
	final public function getPartialScore()
	{
		return $this->partial_score;
	}

	/**
	  * setPartialScore( $partial_score )
	  * 
	  * Set the <i>partial_score</i> property for this object. Donde <i>partial_score</i> es Verdadero si el usuario recibirá puntaje parcial para problemas no resueltos en todos los casos.
	  * Una validacion basica se hara aqui para comprobar que <i>partial_score</i> es de tipo <i>tinyint(1)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param tinyint(1)
	  */
	final public function setPartialScore( $partial_score )
	{
		$this->partial_score = $partial_score;
	}

	/**
	  * getSubmissionsGap
	  * 
	  * Get the <i>submissions_gap</i> property for this object. Donde <i>submissions_gap</i> es Tiempo mínimo en segundos que debe de esperar un usuario despues de realizar un envío para hacer otro
	  * @return int(11)
	  */
	final public function getSubmissionsGap()
	{
		return $this->submissions_gap;
	}

	/**
	  * setSubmissionsGap( $submissions_gap )
	  * 
	  * Set the <i>submissions_gap</i> property for this object. Donde <i>submissions_gap</i> es Tiempo mínimo en segundos que debe de esperar un usuario despues de realizar un envío para hacer otro.
	  * Una validacion basica se hara aqui para comprobar que <i>submissions_gap</i> es de tipo <i>int(11)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param int(11)
	  */
	final public function setSubmissionsGap( $submissions_gap )
	{
		$this->submissions_gap = $submissions_gap;
	}

	/**
	  * getFeedback
	  * 
	  * Get the <i>feedback</i> property for this object. Donde <i>feedback</i> es  [Campo no documentado]
	  * @return enum('no','yes','partial')
	  */
	final public function getFeedback()
	{
		return $this->feedback;
	}

	/**
	  * setFeedback( $feedback )
	  * 
	  * Set the <i>feedback</i> property for this object. Donde <i>feedback</i> es  [Campo no documentado].
	  * Una validacion basica se hara aqui para comprobar que <i>feedback</i> es de tipo <i>enum('no','yes','partial')</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param enum('no','yes','partial')
	  */
	final public function setFeedback( $feedback )
	{
		$this->feedback = $feedback;
	}

	/**
	  * getPenalty
	  * 
	  * Get the <i>penalty</i> property for this object. Donde <i>penalty</i> es Entero indicando el número de minutos con que se penaliza por recibir un no-accepted
	  * @return int(11)
	  */
	final public function getPenalty()
	{
		return $this->penalty;
	}

	/**
	  * setPenalty( $penalty )
	  * 
	  * Set the <i>penalty</i> property for this object. Donde <i>penalty</i> es Entero indicando el número de minutos con que se penaliza por recibir un no-accepted.
	  * Una validacion basica se hara aqui para comprobar que <i>penalty</i> es de tipo <i>int(11)</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param int(11)
	  */
	final public function setPenalty( $penalty )
	{
		$this->penalty = $penalty;
	}

	/**
	  * getTimeStart
	  * 
	  * Get the <i>time_start</i> property for this object. Donde <i>time_start</i> es Indica el momento cuando se inicia a contar el timpo: cuando inicia el concurso o cuando se abre el problema
	  * @return enum('contest','problem')
	  */
	final public function getTimeStart()
	{
		return $this->time_start;
	}

	/**
	  * setTimeStart( $time_start )
	  * 
	  * Set the <i>time_start</i> property for this object. Donde <i>time_start</i> es Indica el momento cuando se inicia a contar el timpo: cuando inicia el concurso o cuando se abre el problema.
	  * Una validacion basica se hara aqui para comprobar que <i>time_start</i> es de tipo <i>enum('contest','problem')</i>. 
	  * Si esta validacion falla, se arrojara... algo. 
	  * @param enum('contest','problem')
	  */
	final public function setTimeStart( $time_start )
	{
		$this->time_start = $time_start;
	}

}
