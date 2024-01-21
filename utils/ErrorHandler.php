<?php
namespace Utils;

class ErrorHandler
{
    public static function handleError($message, $statusCode)
    {
        ResponseHandler::sendResponse(['error' => $message], $statusCode);
    }

    public static function notFound()
    {
        self::handleError('Not Found', 404);
    }

    public static function badRequest()
    {
        self::handleError('Bad Request', 400);
    }

    public static function unauthorized()
    {
        self::handleError('Unauthorized', 401);
    }

    public static function forbidden()
    {
        self::handleError('Forbidden', 403);
    }

    public static function methodNotAllowed()
    {
        self::handleError('Method Not Allowed', 405);
    }

    public static function conflict()
    {
        self::handleError('Conflict', 409);
    }

    public static function internalServerError()
    {
        self::handleError('Internal Server Error', 500);
    }

    public static function serviceUnavailable()
    {
        self::handleError('Service Unavailable', 503);
    }
}
