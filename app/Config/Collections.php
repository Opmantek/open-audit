<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

use Config\Database;

#[\AllowDynamicProperties]

class Collections extends BaseConfig
{
    public function __construct()
    {
        parent::__construct();

        $this->agents = new \StdClass();
        $this->agents->icon = 'fa-regular fa-comments';
        $this->agents->name = 'Agents';
        $this->agents->edition = 'Enterprise';
        $this->agents->orgs = 'b';
        $this->agents->actions = new \stdClass();
        $this->agents->actions->enterprise = 'crud';
        $this->agents->actions->professional = 'r';
        $this->agents->actions->community = '';

        $this->applications = new \StdClass();
        $this->applications->icon = 'fa fa-th-list';
        $this->applications->name = 'Applications';
        $this->applications->edition = 'Enterprise';
        $this->applications->orgs = 'd';
        $this->applications->actions = new \stdClass();
        $this->applications->actions->enterprise = 'crud';
        $this->applications->actions->professional = 'r';
        $this->applications->actions->community = '';

        $this->attributes = new \StdClass();
        $this->attributes->icon = 'fa fa-list-ul';
        $this->attributes->name = 'Attributes';
        $this->attributes->edition = 'Community';
        $this->attributes->orgs = 'b';
        $this->attributes->actions = new \stdClass();
        $this->attributes->actions->enterprise = 'crud';
        $this->attributes->actions->professional = 'crud';
        $this->attributes->actions->community = 'crud';

        $this->auth = new \StdClass();
        $this->auth->icon = 'fa fa-key';
        $this->auth->name = 'Auth';
        $this->auth->edition = 'Community';
        $this->auth->orgs = 'd';
        $this->auth->actions = new \stdClass();
        $this->auth->actions->enterprise = 'crud';
        $this->auth->actions->professional = 'crud';
        $this->auth->actions->community = 'crud';

        $this->baselines = new \StdClass();
        $this->baselines->icon = 'fa fa-line-chart';
        $this->baselines->name = 'Baselines';
        $this->baselines->edition = 'Enterprise';
        $this->baselines->orgs = 'd';
        $this->baselines->actions = new \stdClass();
        $this->baselines->actions->enterprise = 'crud';
        $this->baselines->actions->professional = '';
        $this->baselines->actions->community = '';

        $this->baselines_policies = new \StdClass();
        $this->baselines_policies->icon = 'fa fa-area-chart';
        $this->baselines_policies->name = 'Baselines Policies';
        $this->baselines_policies->edition = 'Enterprise';
        $this->baselines_policies->orgs = 'd';
        $this->baselines_policies->actions = new \stdClass();
        $this->baselines_policies->actions->enterprise = 'crud';
        $this->baselines_policies->actions->professional = '';
        $this->baselines_policies->actions->community = '';

        $this->baselines_results = new \StdClass();
        $this->baselines_results->icon = 'fa fa-table';
        $this->baselines_results->name = 'Baselines Results';
        $this->baselines_results->edition = 'Enterprise';
        $this->baselines_results->orgs = 'd';
        $this->baselines_results->actions = new \stdClass();
        $this->baselines_results->actions->enterprise = 'crud';
        $this->baselines_results->actions->professional = '';
        $this->baselines_results->actions->community = '';

        $this->benchmarks = new \StdClass();
        $this->benchmarks->icon = 'fa-solid fa-shield-halved';
        $this->benchmarks->name = 'Benchmarks';
        $this->benchmarks->edition = 'Enterprise';
        $this->benchmarks->orgs = 'b';
        $this->benchmarks->actions = new \stdClass();
        $this->benchmarks->actions->enterprise = 'crud';
        $this->benchmarks->actions->professional = '';
        $this->benchmarks->actions->community = '';

        $this->benchmarks_exceptions = new \StdClass();
        $this->benchmarks_exceptions->icon = 'fa-solid fa-wand-sparkles';
        $this->benchmarks_exceptions->name = 'Benchmarks Exception';
        $this->benchmarks_exceptions->edition = 'Enterprise';
        $this->benchmarks_exceptions->orgs = 'b';
        $this->benchmarks_exceptions->actions = new \stdClass();
        $this->benchmarks_exceptions->actions->enterprise = 'crud';
        $this->benchmarks_exceptions->actions->professional = '';
        $this->benchmarks_exceptions->actions->community = '';

        $this->benchmarks_policies = new \StdClass();
        $this->benchmarks_policies->icon = 'fa-solid fa-wand-sparkles';
        $this->benchmarks_policies->name = 'Benchmarks Policies';
        $this->benchmarks_policies->edition = 'Enterprise';
        $this->benchmarks_policies->orgs = 'b';
        $this->benchmarks_policies->actions = new \stdClass();
        $this->benchmarks_policies->actions->enterprise = 'crud';
        $this->benchmarks_policies->actions->professional = '';
        $this->benchmarks_policies->actions->community = '';

        $this->clouds = new \StdClass();
        $this->clouds->icon = 'fa fa-cloud';
        $this->clouds->name = 'Clouds';
        $this->clouds->edition = 'Enterprise';
        $this->clouds->orgs = 'd';
        $this->clouds->actions = new \stdClass();
        $this->clouds->actions->enterprise = 'crud';
        $this->clouds->actions->professional = '';
        $this->clouds->actions->community = '';

        $this->clusters = new \StdClass();
        $this->clusters->icon = 'fa fa-cubes';
        $this->clusters->name = 'Clusters';
        $this->clusters->edition = 'Professional';
        $this->clusters->orgs = 'd';
        $this->clusters->actions = new \stdClass();
        $this->clusters->actions->enterprise = 'crud';
        $this->clusters->actions->professional = 'crud';
        $this->clusters->actions->community = '';

        $this->collectors = new \StdClass();
        $this->collectors->icon = 'fa fa-cogs';
        $this->collectors->name = 'Collectors';
        $this->collectors->edition = 'Enterprise';
        $this->collectors->orgs = 'd';
        $this->collectors->actions = new \stdClass();
        $this->collectors->actions->enterprise = 'crud';
        $this->collectors->actions->professional = '';
        $this->collectors->actions->community = '';

        $this->components = new \StdClass();
        $this->components->icon = 'fa fa-desktop';
        $this->components->name = 'Components';
        $this->components->edition = 'Community';
        $this->components->orgs = 'd';
        $this->components->actions = new \stdClass();
        $this->components->actions->enterprise = 'crud';
        $this->components->actions->professional = 'crud';
        $this->components->actions->community = 'crud';

        $this->configuration = new \StdClass();
        $this->configuration->icon = 'fa fa-sliders';
        $this->configuration->name = 'Configuration';
        $this->configuration->edition = 'Community';
        $this->configuration->orgs = 'u';
        $this->configuration->actions = new \stdClass();
        $this->configuration->actions->enterprise = 'crud';
        $this->configuration->actions->professional = 'crud';
        $this->configuration->actions->community = 'crud';

        $this->connections = new \StdClass();
        $this->connections->icon = 'fa fa-link';
        $this->connections->name = 'Connections';
        $this->connections->edition = 'Community';
        $this->connections->orgs = 'd';
        $this->connections->actions = new \stdClass();
        $this->connections->actions->enterprise = 'crud';
        $this->connections->actions->professional = 'crud';
        $this->connections->actions->community = 'crud';

        $this->credentials = new \StdClass();
        $this->credentials->icon = 'fa fa-shield';
        $this->credentials->name = 'Credentials';
        $this->credentials->edition = 'Community';
        $this->credentials->orgs = 'd';
        $this->credentials->actions = new \stdClass();
        $this->credentials->actions->enterprise = 'crud';
        $this->credentials->actions->professional = 'crud';
        $this->credentials->actions->community = 'crud';

        $this->dashboards = new \StdClass();
        $this->dashboards->icon = 'fa fa-dashboard';
        $this->dashboards->name = 'Dashboards';
        $this->dashboards->edition = 'Enterprise';
        $this->dashboards->orgs = 'b';
        $this->dashboards->actions = new \stdClass();
        $this->dashboards->actions->enterprise = 'crud';
        $this->dashboards->actions->professional = 'r';
        $this->dashboards->actions->community = '';

        $this->database = new \StdClass();
        $this->database->icon = 'fa fa-database';
        $this->database->name = 'Database';
        $this->database->edition = 'Community';
        $this->database->orgs = 'u';
        $this->database->actions = new \stdClass();
        $this->database->actions->enterprise = 'crud';
        $this->database->actions->professional = 'crud';
        $this->database->actions->community = 'crud';

        $this->devices = new \StdClass();
        $this->devices->icon = 'fa fa-desktop';
        $this->devices->name = 'Devices';
        $this->devices->edition = 'Community';
        $this->devices->orgs = 'd';
        $this->devices->actions = new \stdClass();
        $this->devices->actions->enterprise = 'crud';
        $this->devices->actions->professional = 'crud';
        $this->devices->actions->community = 'crud';

        $this->discoveries = new \StdClass();
        $this->discoveries->icon = 'fa fa-binoculars';
        $this->discoveries->name = 'Discoveries';
        $this->discoveries->edition = 'Community';
        $this->discoveries->orgs = 'd';
        $this->discoveries->actions = new \stdClass();
        $this->discoveries->actions->enterprise = 'crud';
        $this->discoveries->actions->professional = 'crud';
        $this->discoveries->actions->community = 'crud';

        $this->discovery_log = new \StdClass();
        $this->discovery_log->icon = 'fa fa-terminal';
        $this->discovery_log->name = 'Discovery Log';
        $this->discovery_log->edition = 'Community';
        $this->discovery_log->orgs = 'd';
        $this->discovery_log->actions = new \stdClass();
        $this->discovery_log->actions->enterprise = 'crud';
        $this->discovery_log->actions->professional = 'crud';
        $this->discovery_log->actions->community = 'crud';

        $this->discovery_scan_options = new \StdClass();
        $this->discovery_scan_options->icon = 'fa fa-random';
        $this->discovery_scan_options->name = 'Discovery Scan Options';
        $this->discovery_scan_options->edition = 'Enterprise';
        $this->discovery_scan_options->orgs = 'b';
        $this->discovery_scan_options->actions = new \stdClass();
        $this->discovery_scan_options->actions->enterprise = 'crud';
        $this->discovery_scan_options->actions->professional = 'r';
        $this->discovery_scan_options->actions->community = 'r';

        $this->executables = new \StdClass();
        $this->executables->icon = 'fa fa-file-code-o';
        $this->executables->name = 'Executables';
        $this->executables->edition = 'Enterprise';
        $this->executables->orgs = 'b';
        $this->executables->actions = new \stdClass();
        $this->executables->actions->enterprise = 'crud';
        $this->executables->actions->professional = '';
        $this->executables->actions->community = '';

        $this->fields = new \StdClass();
        $this->fields->icon = 'fa fa-comments-o';
        $this->fields->name = 'Fields';
        $this->fields->edition = 'Community';
        $this->fields->orgs = 'b';
        $this->fields->actions = new \stdClass();
        $this->fields->actions->enterprise = 'crud';
        $this->fields->actions->professional = 'crud';
        $this->fields->actions->community = 'crud';

        $this->files = new \StdClass();
        $this->files->icon = 'fa fa-file-image-o';
        $this->files->name = 'Files';
        $this->files->edition = 'Enterprise';
        $this->files->orgs = 'b';
        $this->files->actions = new \stdClass();
        $this->files->actions->enterprise = 'crud';
        $this->files->actions->professional = '';
        $this->files->actions->community = '';

        $this->groups = new \StdClass();
        $this->groups->icon = 'fa fa-tags';
        $this->groups->name = 'Groups';
        $this->groups->edition = 'Community';
        $this->groups->orgs = 'b';
        $this->groups->actions = new \stdClass();
        $this->groups->actions->enterprise = 'crud';
        $this->groups->actions->professional = 'crud';
        $this->groups->actions->community = 'crud';

        $this->help = new \StdClass();
        $this->help->icon = 'fa fa-question';
        $this->help->name = 'Help';
        $this->help->edition = 'Community';
        $this->help->orgs = 'u';
        $this->help->actions = new \stdClass();
        $this->help->actions->enterprise = 'crud';
        $this->help->actions->professional = 'crud';
        $this->help->actions->community = 'crud';

        $this->integrations = new \StdClass();
        $this->integrations->icon = 'fa fa-exchange';
        $this->integrations->name = 'Integrations';
        $this->integrations->edition = 'Enterprise';
        $this->integrations->orgs = 'd';
        $this->integrations->actions = new \stdClass();
        $this->integrations->actions->enterprise = 'crud';
        $this->integrations->actions->professional = '';
        $this->integrations->actions->community = '';

        $this->integrations_log = new \StdClass();
        $this->integrations_log->icon = 'fa fa-terminal';
        $this->integrations_log->name = 'Integrations Log';
        $this->integrations_log->edition = 'Enterprise';
        $this->integrations_log->orgs = 'd';
        $this->integrations_log->actions = new \stdClass();
        $this->integrations_log->actions->enterprise = 'crud';
        $this->integrations_log->actions->professional = '';
        $this->integrations_log->actions->community = '';

        $this->integrations_rules = new \StdClass();
        $this->integrations_rules->icon = 'fa fa-area-chart';
        $this->integrations_rules->name = 'Integrations';
        $this->integrations_rules->edition = 'Enterprise';
        $this->integrations_rules->orgs = 'd';
        $this->integrations_rules->actions = new \stdClass();
        $this->integrations_rules->actions->enterprise = 'crud';
        $this->integrations_rules->actions->professional = '';
        $this->integrations_rules->actions->community = '';

        $this->licenses = new \StdClass();
        $this->licenses->icon = 'fa fa-leanpub';
        $this->licenses->name = 'Licenses';
        $this->licenses->edition = 'Community';
        $this->licenses->orgs = 'd';
        $this->licenses->actions = new \stdClass();
        $this->licenses->actions->enterprise = 'crud';
        $this->licenses->actions->professional = 'crud';
        $this->licenses->actions->community = 'crud';

        $this->locations = new \StdClass();
        $this->locations->icon = 'fa fa-building';
        $this->locations->name = 'Locations';
        $this->locations->edition = 'Community';
        $this->locations->orgs = 'd';
        $this->locations->actions = new \stdClass();
        $this->locations->actions->enterprise = 'crud';
        $this->locations->actions->professional = 'crud';
        $this->locations->actions->community = 'crud';

        $this->maps = new \StdClass();
        $this->maps->icon = 'fa fa-map-o';
        $this->maps->name = 'Maps';
        $this->maps->edition = 'Professional';
        $this->maps->orgs = 'd';
        $this->maps->actions = new \stdClass();
        $this->maps->actions->enterprise = 'crud';
        $this->maps->actions->professional = 'crud';
        $this->maps->actions->community = '';

        $this->networks = new \StdClass();
        $this->networks->icon = 'fa fa-wifi';
        $this->networks->name = 'Networks';
        $this->networks->edition = 'Community';
        $this->networks->orgs = 'd';
        $this->networks->actions = new \stdClass();
        $this->networks->actions->enterprise = 'crud';
        $this->networks->actions->professional = 'crud';
        $this->networks->actions->community = 'crud';

        $this->orgs = new \StdClass();
        $this->orgs->icon = 'fa fa-bank';
        $this->orgs->name = 'Organisations';
        $this->orgs->edition = 'Community';
        $this->orgs->orgs = 'd';
        $this->orgs->actions = new \stdClass();
        $this->orgs->actions->enterprise = 'crud';
        $this->orgs->actions->professional = 'crud';
        $this->orgs->actions->community = 'crud';

        $this->packages = new \StdClass();
        $this->packages->icon = 'fa-solid fa-box-open';
        $this->packages->name = 'Packages';
        $this->packages->edition = 'Enterprise';
        $this->packages->orgs = 'd';
        $this->packages->actions = new \stdClass();
        $this->packages->actions->enterprise = 'crud';
        $this->packages->actions->professional = 'r';
        $this->packages->actions->community = 'r';

        $this->queries = new \StdClass();
        $this->queries->icon = 'fa fa-table';
        $this->queries->name = 'Queries';
        $this->queries->edition = 'Community';
        $this->queries->orgs = 'b';
        $this->queries->actions = new \stdClass();
        $this->queries->actions->enterprise = 'crud';
        $this->queries->actions->professional = 'crud';
        $this->queries->actions->community = 'crud';

        $this->rack_devices = new \StdClass();
        $this->rack_devices->icon = 'fa fa-desktop';
        $this->rack_devices->name = 'Rack Devices';
        $this->rack_devices->edition = 'Enterprise';
        $this->rack_devices->orgs = 'd';
        $this->rack_devices->actions = new \stdClass();
        $this->rack_devices->actions->enterprise = 'crud';
        $this->rack_devices->actions->professional = '';
        $this->rack_devices->actions->community = '';

        $this->racks = new \StdClass();
        $this->racks->icon = 'fa fa-film';
        $this->racks->name = 'Racks';
        $this->racks->edition = 'Enterprise';
        $this->racks->orgs = 'd';
        $this->racks->actions = new \stdClass();
        $this->racks->actions->enterprise = 'crud';
        $this->racks->actions->professional = '';
        $this->racks->actions->community = '';

        $this->reports = new \StdClass();
        $this->reports->icon = 'fa fa-table';
        $this->reports->name = 'Reports';
        $this->reports->edition = 'Professional';
        $this->reports->orgs = 'b';
        $this->reports->actions = new \stdClass();
        $this->reports->actions->enterprise = 'crud';
        $this->reports->actions->professional = 'crud';
        $this->reports->actions->community = 'crud';

        $this->roles = new \StdClass();
        $this->roles->icon = 'fa fa-lock';
        $this->roles->name = 'Roles';
        $this->roles->edition = 'Community';
        $this->roles->orgs = 'b';
        $this->roles->actions = new \stdClass();
        $this->roles->actions->enterprise = 'crud';
        $this->roles->actions->professional = 'r';
        $this->roles->actions->community = 'r';

        $this->rules = new \StdClass();
        $this->rules->icon = 'fa fa-map-signs';
        $this->rules->name = 'Rules';
        $this->rules->edition = 'Enterprise';
        $this->rules->orgs = 'b';
        $this->rules->actions = new \stdClass();
        $this->rules->actions->enterprise = 'crud';
        $this->rules->actions->professional = 'r';
        $this->rules->actions->community = 'r';

        $this->scripts = new \StdClass();
        $this->scripts->icon = 'fa fa-code';
        $this->scripts->name = 'Scripts';
        $this->scripts->edition = 'Professional';
        $this->scripts->orgs = 'b';
        $this->scripts->actions = new \stdClass();
        $this->scripts->actions->enterprise = 'crud';
        $this->scripts->actions->professional = 'crud';
        $this->scripts->actions->community = 'r';

        $this->search = new \StdClass();
        $this->search->icon = 'fa fa-desktop';
        $this->search->name = 'Search';
        $this->search->edition = 'Community';
        $this->search->orgs = 'd';
        $this->search->actions = new \stdClass();
        $this->search->actions->enterprise = 'crud';
        $this->search->actions->professional = 'crud';
        $this->search->actions->community = 'crud';

        $this->summaries = new \StdClass();
        $this->summaries->icon = 'fa fa-pie-chart';
        $this->summaries->name = 'Summaries';
        $this->summaries->edition = 'Professional';
        $this->summaries->orgs = 'b';
        $this->summaries->actions = new \stdClass();
        $this->summaries->actions->enterprise = 'crud';
        $this->summaries->actions->professional = 'crud';
        $this->summaries->actions->community = 'r';

        $this->support = new \StdClass();
        $this->support->icon = 'fa-solid fa-headset';
        $this->support->name = 'Support';
        $this->support->edition = 'Community';
        $this->support->orgs = 'b';
        $this->support->actions = new \stdClass();
        $this->support->actions->enterprise = 'crud';
        $this->support->actions->professional = 'crud';
        $this->support->actions->community = 'crud';

        $this->tasks = new \StdClass();
        $this->tasks->icon = 'fa fa-clock-o';
        $this->tasks->name = 'Tasks';
        $this->tasks->edition = 'Professional';
        $this->tasks->orgs = 'd';
        $this->tasks->actions = new \stdClass();
        $this->tasks->actions->enterprise = 'crud';
        $this->tasks->actions->professional = 'crud';
        $this->tasks->actions->community = '';

        $this->users = new \StdClass();
        $this->users->icon = 'fa fa-users';
        $this->users->name = 'Users';
        $this->users->edition = 'Community';
        $this->users->orgs = 'd';
        $this->users->actions = new \stdClass();
        $this->users->actions->enterprise = 'crud';
        $this->users->actions->professional = 'crud';
        $this->users->actions->community = 'crud';

        $this->widgets = new \StdClass();
        $this->widgets->icon = 'fa fa-chart-column';
        $this->widgets->name = 'Widgets';
        $this->widgets->edition = 'Professional';
        $this->widgets->orgs = 'b';
        $this->widgets->actions = new \stdClass();
        $this->widgets->actions->enterprise = 'crud';
        $this->widgets->actions->professional = 'crud';
        $this->widgets->actions->community = 'r';
    }
}
