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
 *         @SWG\Property(property="name", type="string"),
 *         @SWG\Property(property="director", type="string"),
 *         @SWG\Property(property="classification", type="string",enum={"ADULT","PARENTS_SUGGESTED","KIDS","GENERAL"}),
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
 *         @SWG\Property(property="classification", type="string",enum={"ADULT","PARENTS_SUGGESTED","KIDS","GENERAL"}),
 *      ),
 *     @SWG\Definition(
 *         definition="Actor",
 *         required={"name"},
 *         @SWG\Property(property="name", type="string"),
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
 *             response=200,
 *             description="Success",
 *             @SWG\Schema(ref="#/definitions/MovieListResponse"),
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
 *             response=200,
 *             description="Success",
 *             @SWG\Schema(ref="#/definitions/ActorListResponse"),
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
