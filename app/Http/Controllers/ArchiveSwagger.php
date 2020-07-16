<?php
use Swagger\Annotations as SWG;
/**
 * @SWG\Swagger(
 *     basePath="/api/v1",
 *     schemes={"http"},
 *     host=L5_SWAGGER_CONST_HOST,
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="L5 Swagger API",
 *         description="Api integration MOVIE MAGIC WEB",
 *         @SWG\Contact(
 *             email="teste@teste.con"
 *         ),
 *     ),
 *     @SWG\Definition(
 *         definition="MovieSave",
 *         required={"name","director","classification"},
 *         @SWG\Property(property="name", type="string",default="Matrix", example="Matrix"),
 *         @SWG\Property(property="year", type="number",default=1999, example=1999),
 *         @SWG\Property(property="description", type="string",default="Um jovem programador é atormentado por estranhos pesadelos nos quais sempre está conectado por cabos a um imenso sistema...", example="Um jovem programador é atormentado por estranhos pesadelos nos quais sempre está conectado por cabos a um imenso sistema..."),
 *         @SWG\Property(property="director", type="string",default="Lana Wachowski, Lilly Wachowski", example="Lana Wachowski, Lilly Wachowski"),
 *         @SWG\Property(property="classification", type="string", default="PARENTS_SUGGESTED",enum={"ADULT","PARENTS_SUGGESTED","KIDS","GENERAL"}),
 *         @SWG\Property(
 *              property="actors",
 *              type="array",
 *              @SWG\Items(
 *                  ref="#/definitions/MovieActors",
 *              ),
 *          ),
 *      ),
 *     @SWG\Definition(
 *         definition="MovieUpdate",
 *         required={"name","director","classification"},
 *         @SWG\Property(property="name", type="string"),
 *         @SWG\Property(property="director", type="string"),
 *         @SWG\Property(property="year", type="number"),
 *         @SWG\Property(property="description", type="string"),
 *         @SWG\Property(property="classification", type="string",enum={"ADULT","PARENTS_SUGGESTED","KIDS","GENERAL"}),
 *      ),
 *     @SWG\Definition(
 *         definition="Actor",
 *         required={"name","personage","paper"},
 *         @SWG\Property(property="name", type="string", default="Keanu Reeves",example="Keanu Reeves"),
 *         @SWG\Property(property="personage", type="string", default="Neo",example="Neo"),
 *         @SWG\Property(property="paper", type="string", default="Um jovem programador é atormentado por estranhos pesadelos nos quais..",example="Um jovem programador é atormentado por estranhos pesadelos nos quais..."),
 *      ),
 *     @SWG\Definition(
 *         definition="MovieActors",
 *         @SWG\Property(property="actor_id", type="integer"),
 *      ),
 *     @SWG\Definition(
 *         definition="MovieResponse",
 *         @SWG\Property(property="id", type="integer"),
 *         @SWG\Property(property="name", type="string"),
 *         @SWG\Property(property="director", type="string"),
 *         @SWG\Property(property="classification", type="string"),
 *         @SWG\Property(property="created_at", type="string",example="2018-04-16 11:11:11"),
 *         @SWG\Property(property="updated_at", type="string",example="2018-04-16 11:11:11"),
 *      ),
 *     @SWG\Definition(
 *         definition="ActorResponse",
 *         @SWG\Property(property="id", type="integer"),
 *         @SWG\Property(property="name", type="string"),
 *         @SWG\Property(property="created_at", type="string",example="2018-04-16 11:11:11"),
 *         @SWG\Property(property="updated_at", type="string",example="2018-04-16 11:11:11"),
 *      ),
 *     @SWG\Definition(
 *         definition="ActorListResponse",
 *         type="array",
 *         @SWG\Items(
 *              @SWG\Property(property="id", type="integer"),
 *              @SWG\Property(property="name", type="string"),
 *              @SWG\Property(property="created_at", type="string",example="2018-04-16 11:11:11"),
 *              @SWG\Property(property="updated_at", type="string",example="2018-04-16 11:11:11"),
 *          ),
 *      ),
 *     @SWG\Definition(
 *         definition="MovieActorsResponse",
 *         type="array",
 *         @SWG\Items(
 *              @SWG\Property(property="id", type="integer"),
 *              @SWG\Property(property="movie_id", type="integer"),
 *              @SWG\Property(property="actor_id", type="integer"),
 *              @SWG\Property(property="created_at", type="string",example="2018-04-16 11:11:11"),
 *              @SWG\Property(property="updated_at", type="string",example="2018-04-16 11:11:11"),
 *         ),
 *      ),
 *     @SWG\Definition(
 *         definition="MovieListResponse",
 *         type="array",
 *         @SWG\Items(
 *              @SWG\Property(property="id", type="integer"),
 *              @SWG\Property(property="name", type="string"),
 *              @SWG\Property(property="director", type="string"),
 *              @SWG\Property(property="classification", type="string"),
 *              @SWG\Property(property="created_at", type="string",example="2018-04-16 11:11:11"),
 *              @SWG\Property(property="updated_at", type="string",example="2018-04-16 11:11:11"),
 *              @SWG\Property(
 *                  property="getActors",
 *                  type="array",
 *                  @SWG\Items(
 *                      ref="#/definitions/Actor",
 *                  ),
 *              ),
 *          ),
 *      ),
 * )
 */
/**
 *
 * @SWG\Post(
 *         path="/movie",
 *         tags={"Movie"},
 *         operationId="movieSave",
 *         summary="Create new movie",
 *         @SWG\Parameter(
 *             name="movie",
 *             in="body",
 *             required=true,
 *             @SWG\Schema(ref="#/definitions/MovieSave"),
 *        ),
 *         @SWG\Response(
 *             response=200,
 *             description="Success",
 *             @SWG\Schema(ref="#/definitions/MovieResponse"),
 *         ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */
/**
 *
 * @SWG\Put(
 *         path="/movie/{id}",
 *         tags={"Movie"},
 *         operationId="updateMovie",
 *         summary="Update new movie",
 *         @SWG\Parameter(
 *            name="id",
 *            description="movie id",
 *            required=true,
 *            type="string",
 *            in="path"
 *         ),
 *         @SWG\Parameter(
 *             name="movie",
 *             in="body",
 *             required=true,
 *             @SWG\Schema(ref="#/definitions/MovieUpdate"),
 *        ),
 *         @SWG\Response(
 *             response=200,
 *             description="Success",
 *             @SWG\Schema(ref="#/definitions/MovieResponse"),
 *         ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */
/**
 *
 * @SWG\Get(
 *         path="/movie",
 *         tags={"Movie"},
 *         operationId="getMovie",
 *         summary="get all movie",
 *         @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *              @SWG\Schema (
 *                  @SWG\Property(property="current_page", type="integer"),
 *                  @SWG\Property(property="first_page_url", type="string"),
 *                  @SWG\Property(property="from", type="integer"),
 *                  @SWG\Property(property="last_page", type="integer"),
 *                  @SWG\Property(property="next_page_url", type="string"),
 *                  @SWG\Property(property="path", type="string"),
 *                  @SWG\Property(property="per_page", type="integer"),
 *                  @SWG\Property(property="prev_page_url", type="integer"),
 *                  @SWG\Property(property="to", type="string"),
 *                  @SWG\Property(property="total", type="integer"),
 *                  @SWG\Property(
 *                      property="data",
 *                      type="array",
 *                      @SWG\Items(
 *                          ref="#/definitions/MovieListResponse",
 *                      ),
 *                  ),
 *              ),
 *          ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */
/**
 *
 * @SWG\Delete(
 *         path="/movie/{id}",
 *         tags={"Movie"},
 *         operationId="deleteMovie",
 *         summary="delete movie",
 *         @SWG\Parameter(
 *            name="id",
 *            description="movie id",
 *            required=true,
 *            type="string",
 *            in="path"
 *         ),
 *         @SWG\Response(
 *             response=200,
 *             description="Success",
 *         ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */

 /**
 *
 * @SWG\Post(
 *         path="/actor",
 *         tags={"Actor"},
 *         operationId="actorSave",
 *         summary="Create new actor",
 *         @SWG\Parameter(
 *             name="actor",
 *             in="body",
 *             required=true,
 *             @SWG\Schema(ref="#/definitions/Actor"),
 *        ),
 *         @SWG\Response(
 *             response=200,
 *             description="Success",
 *             @SWG\Schema(ref="#/definitions/ActorResponse"),
 *         ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */
/**
 *
 * @SWG\Put(
 *         path="/actor/{id}",
 *         tags={"Actor"},
 *         operationId="updateActor",
 *         summary="Update actor",
 *         @SWG\Parameter(
 *            name="id",
 *            description="actor id",
 *            required=true,
 *            type="string",
 *            in="path"
 *         ),
 *         @SWG\Parameter(
 *             name="actor",
 *             in="body",
 *             required=true,
 *             @SWG\Schema(ref="#/definitions/Actor"),
 *        ),
 *         @SWG\Response(
 *             response=200,
 *             description="Success",
 *             @SWG\Schema(ref="#/definitions/ActorResponse"),
 *         ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */
/**
 *
 * @SWG\Get(
 *         path="/actor",
 *         tags={"Actor"},
 *         operationId="getActor",
 *         summary="get all actor",
 *         @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *              @SWG\Schema (
 *                  @SWG\Property(property="current_page", type="integer"),
 *                  @SWG\Property(property="first_page_url", type="string"),
 *                  @SWG\Property(property="from", type="integer"),
 *                  @SWG\Property(property="last_page", type="integer"),
 *                  @SWG\Property(property="next_page_url", type="string"),
 *                  @SWG\Property(property="path", type="string"),
 *                  @SWG\Property(property="per_page", type="integer"),
 *                  @SWG\Property(property="prev_page_url", type="integer"),
 *                  @SWG\Property(property="to", type="string"),
 *                  @SWG\Property(property="total", type="integer"),
 *                  @SWG\Property(
 *                      property="data",
 *                      type="array",
 *                      @SWG\Items(
 *                          ref="#/definitions/ActorListResponse",
 *                      ),
 *                  ),
 *              ),
 *          ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */
/**
 *
 * @SWG\Delete(
 *         path="/actor/{id}",
 *         tags={"Actor"},
 *         operationId="deleteActor",
 *         summary="delete actor",
 *         @SWG\Parameter(
 *            name="id",
 *            description="actor id",
 *            required=true,
 *            type="string",
 *            in="path"
 *         ),
 *         @SWG\Response(
 *             response=200,
 *             description="Success",
 *         ),
 *         @SWG\Response(response=400, description="Bad request"),
 *         @SWG\Response(response=500, description="Server Errors"),
 *         security={
 *           {"passport": {}}
 *          }
 *     )
 *
 */
