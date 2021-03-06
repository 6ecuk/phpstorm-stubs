<?php

/**
 * Returns the stack depth level.
 * The main body of a script is level 0 and each include and/or function call adds one to the stack depth level.
 * @return int
 */
function xdebug_get_stack_depth () {}

/**
 * Displays the current function stack, in a similar way as what Xdebug would display in an error situation.
 * @param string $message
 * @param int $options    A bit mask of the following constants: XDEBUG_STACK_NO_DESC
 * @return array
 */
function xdebug_get_function_stack ($message = '', $options = 0) {}

/**
 * Returns an array which resembles the stack trace up to this point.
 * @return array
 */
function xdebug_print_function_stack () {}

/**
 * Returns an array where each element is a variable name which is defined in the current scope.
 * @return array
 */
function xdebug_get_declared_vars () {}

/**
 * This function returns the filename that contains the function/method that called the current function/method.
 * @return string
 */
function xdebug_call_file () {}

/**
 * This function returns the name of the class from which the current function/method was called from.
 * @return string
 */
function xdebug_call_class () {}

/**
 * This function returns the name of the function/method from which the current function/method was called from.
 * @return string
 */
function xdebug_call_function () {}

/**
 * This function returns the line number that contains the function/method that called the current function/method.
 * @return int
 */
function xdebug_call_line () {}

/**
 * This function starts the monitoring of functions that were given in a list as argument to this function.
 * Function monitoring allows you to find out where in your code the functions that you provided as argument are called from.
 * This can be used to track where old, or, discouraged functions are used.
 * The defined functions are case sensitive, and a dynamic call to a static method will not be caught.
 * @param string[] $list_of_functions_to_monitor
 * @return void
 */
function xdebug_start_function_monitor ( array $list_of_functions_to_monitor ) {}

/**
 * This function stops the function monitor.
 * In order to get the list of monitored functions, you need to use the xdebug_get_monitored_functions() function.
 * @return void
 */
function xdebug_stop_function_monitor () {}

/**
 * Returns a structure which contains information about where the monitored functions were executed in your script.
 * @return array
 */
function xdebug_get_monitored_functions () {}

/**
 * This function displays structured information about one or more expressions that includes its type and value.
 * Arrays are explored recursively with values.
 * @return void
 */
function xdebug_var_dump ($var) {}

/**
 * This function displays structured information about one or more variables that includes its type, value and refcount information.
 * Arrays are explored recursively with values.
 * This function is implemented differently from PHP's debug_zval_dump() function in order to work around the problems
 * that that function has because the variable itself is actually passed to the function.
 * Xdebug's version is better as it uses the variable name to lookup the variable in the internal symbol table and
 * accesses all the properties directly without having to deal with actually passing a variable to a function.
 * The result is that the information that this function returns is much more accurate than PHP's own function
 * for showing zval information.
 * @param string $varName
 * @return void
 */
function xdebug_debug_zval ($varName) {}

/**
 * This function displays structured information about one or more variables that includes its type,
 * value and refcount information.
 * Arrays are explored recursively with values.
 * The difference with xdebug_debug_zval() is that the information is not displayed through a web server API layer,
 * but directly shown on stdout (so that when you run it with apache in single process mode it ends up on the console).
 * @param string $varName
 * @return void
 */
function xdebug_debug_zval_stdout ($varName) {}

/**
 * Enable showing stack traces on error conditions.
 * @return void
 */
function xdebug_enable () {}

/**
 * Disable showing stack traces on error conditions.
 * @return void
 */
function xdebug_disable () {}

/**
 * Return whether stack traces would be shown in case of an error or not.
 * @return bool
 */
function xdebug_is_enabled () {}

/**
 * Starts recording all notices, warnings and errors and prevents their display
 *
 * When this function is executed, Xdebug will cause PHP not to display any notices, warnings or errors. 
 * Instead, they are formatted according to Xdebug's normal error formatting rules (ie, the error table
 * with the red exclamation mark) and then stored in a buffer.
 * This will continue until you call xdebug_stop_error_collection().
 *
 * This buffer's contents can be retrieved by calling xdebug_get_collected_errors() and then subsequently displayed.
 * This is really useful if you want to prevent Xdebug's powerful error reporting features from destroying your layout.
 * @return void
 */
function xdebug_start_error_collection () {}

/**
 * When this function is executed, error collection as started by xdebug_start_error_collection() is aborted.
 * The errors stored in the collection buffer are not deleted and still available to be fetched through xdebug_get_collected_errors().
 * @return void
 */
function xdebug_stop_error_collection () {}

/**
 * This function returns all errors from the collection buffer that contains all errors that were stored there when error collection was started with xdebug_start_error_collection().
 * By default this function will not clear the error collection buffer. If you pass true as argument to this function then the buffer will be cleared as well.
 * This function returns a string containing all collected errors formatted as an "Xdebug table".
 * @param bool $clean
 * @return string
 */
function xdebug_get_collected_errors ($clean = false) {}

/**
 * This function makes the debugger break on the specific line as if a normal file/line breakpoint was set on this line.
 *
 * @return bool
 */
function xdebug_break () {}

/**
 * Start tracing function calls from this point to the file in the trace_file parameter.
 * If no filename is given, then the trace file will be placed in the directory as configured by the xdebug.trace_output_dir setting.
 * In case a file name is given as first parameter, the name is relative to the current working directory.
 * This current working directory might be different than you expect it to be, so please use an absolute path in case you specify a file name.
 * Use the PHP function getcwd() to figure out what the current working directory is.
 * @param $trace_file
 * @param $options
 * @return void
 */
function xdebug_start_trace ($trace_file, $options = 0) {}

/**
 * Stop tracing function calls and closes the trace file.
 *
 * @return void
 */
function xdebug_stop_trace () {}

/**
 * Returns the name of the file which is used to trace the output of this script too.
 * This is useful when xdebug.auto_trace is enabled.
 * @return string
 */
function xdebug_get_tracefile_name () {}

/**
 * Returns the name of the file which is used to save profile information to.
 *
 * @return string
 */
function xdebug_get_profiler_filename () {}

/**
 * @return bool
 */
function xdebug_dump_aggr_profiling_data () {}

/**
 * @return bool
 */
function xdebug_clear_aggr_profiling_data () {}

/**
 * Returns the current amount of memory the script uses.
 * Before PHP 5.2.1, this only works if PHP is compiled with --enable-memory-limit.
 * From PHP 5.2.1 and later this function is always available.
 *
 * @return int
 */
function xdebug_memory_usage () {}

/**
 * Returns the maximum amount of memory the script used until now.
 * Before PHP 5.2.1, this only works if PHP is compiled with --enable-memory-limit.
 * From PHP 5.2.1 and later this function is always available.
 *
 * @return int
 */
function xdebug_peak_memory_usage () {}

/**
 * Returns the current time index since the starting of the script in seconds.
 *
 * @return float
 */
function xdebug_time_index () {}

/**
 * This function starts gathering the information for code coverage.
 * The information that is collected consists of an two dimensional array with as primary index the executed filename and as secondary key the line number.
 * The value in the elements represents the total number of execution units on this line have been executed.
 * Options to this function are: XDEBUG_CC_UNUSED Enables scanning of code to figure out which line has executable code.
 * XDEBUG_CC_DEAD_CODE Enables branch analyzes to figure out whether code can be executed.
 *
 * @param int $options
 * @return void
 */
function xdebug_start_code_coverage ($options = 0) {}

/**
 * This function stops collecting information, the information in memory will be destroyed.
 * If you pass "false" as argument, then the code coverage information will not be destroyed so that you can resume
 * the gathering of information with the xdebug_start_code_coverage() function again.
 * @param bool $cleanup Destroy collected information in memory
 * @return void
 */
function xdebug_stop_code_coverage ($cleanup = true) {}

/**
 * Returns whether code coverage is active.
 * @return bool
 */
function xdebug_code_coverage_started () {}

/**
 * Returns a structure which contains information about which lines
 * were executed in your script (including include files).
 *
 * @return array
 */
function xdebug_get_code_coverage () {}

/**
 * Returns the number of functions called, including constructors, desctructors and methods.
 *
 * @return int
 */
function xdebug_get_function_count () {}

/**
 * This function dumps the values of the elements of the super globals
 * as specified with the xdebug.dump.* php.ini settings.
 *
 * @return void
 */
function xdebug_dump_superglobals () {}

/**
 * Returns all the headers that are set with PHP's header() function,
 * or any other header set internally within PHP (such as through setcookie()), as an array.
 *
 * @return array
 */
function xdebug_get_headers () {}

function xdebug_get_formatted_function_stack() {}

define ('XDEBUG_STACK_NO_DESC', 1);
define ('XDEBUG_TRACE_APPEND', 1);
define ('XDEBUG_TRACE_COMPUTERIZED', 2);
define ('XDEBUG_TRACE_HTML', 4);
define ('XDEBUG_TRACE_NAKED_FILENAME', 8);
define ('XDEBUG_CC_UNUSED', 1);
define ('XDEBUG_CC_DEAD_CODE', 2);
define ('XDEBUG_CC_BRANCH_CHECK', 4);
