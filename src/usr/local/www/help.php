<?php
/*
 * help.php
 *
 * part of pfSense (https://www.pfsense.org)
 * Copyright (c) 2004-2019 Rubicon Communications, LLC (Netgate)
 * All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once("guiconfig.inc");

/* Define hash of jumpto url maps */
$helppages = array(
	'index.php' => 'https://doc.pfsense.org/index.php/Dashboard',

	'crash_reporter.php' => 'https://doc.pfsense.org/index.php/Unexpected_Reboot_Troubleshooting',
	'diag_arp.php' => 'https://doc.pfsense.org/index.php/ARP_Table',
	'diag_authentication.php' => 'https://doc.pfsense.org/index.php/User_Authentication_Servers',
	'diag_backup.php' => 'https://doc.pfsense.org/index.php/Configuration_Backup_and_Restore',
	'diag_command.php' => 'https://doc.pfsense.org/index.php/Execute_Command',
	'diag_confbak.php' => 'https://doc.pfsense.org/index.php/Configuration_History',
	'diag_defaults.php' => 'https://doc.pfsense.org/index.php/Factory_Defaults',
	'diag_dns.php' => 'https://doc.pfsense.org/index.php/DNS_Lookup',
	'diag_dump_states.php' => 'https://doc.pfsense.org/index.php/Show_States',
	'diag_dump_states_sources.php' => 'https://doc.pfsense.org/index.php/Show_Source_Tracking',
	'diag_edit.php' => 'https://doc.pfsense.org/index.php/Edit_File',
	'diag_gmirror.php' => 'https://doc.pfsense.org/index.php/Create_a_Software_RAID1_%28gmirror%29',
	'diag_halt.php' => 'https://doc.pfsense.org/index.php/Halt_System',
	'diag_limiter_info.php' => 'https://doc.pfsense.org/index.php/Limiters',
	'diag_ndp.php' => 'https://doc.pfsense.org/index.php/NDP_Table',
	'diag_packet_capture.php' => 'https://doc.pfsense.org/index.php/Sniffers,_Packet_Capture',
	'diag_pf_info.php' => 'https://doc.pfsense.org/index.php/Packet_Filter_Information',
	'diag_pftop.php' => 'https://doc.pfsense.org/index.php/How_can_I_monitor_bandwidth_usage#pftop',
	'diag_ping.php' => 'https://doc.pfsense.org/index.php/Ping_Host',
	'diag_reboot.php' => 'https://doc.pfsense.org/index.php/Reboot_System',
	'diag_resetstate.php' => 'https://doc.pfsense.org/index.php/Reset_States',
	'diag_routes.php' => 'https://doc.pfsense.org/index.php/Viewing_Routes',
	'diag_smart.php' => 'https://doc.pfsense.org/index.php/SMART_Status',
	'diag_sockets.php' => 'https://doc.pfsense.org/index.php/Diag_Sockets',
	'diag_states_summary.php' => 'https://doc.pfsense.org/index.php/States_Summary',
	'diag_system_activity.php' => 'https://doc.pfsense.org/index.php/System_Activity',
	'diag_tables.php' => 'https://doc.pfsense.org/index.php/Tables',
	'diag_testport.php' => 'https://doc.pfsense.org/index.php/Test_Port',
	'diag_traceroute.php' => 'https://doc.pfsense.org/index.php/Traceroute',
	'easyrule.php' => 'https://doc.pfsense.org/index.php/Easy_Rule',
	'firewall_aliases_edit.php' => 'https://doc.pfsense.org/index.php/Aliases',
	'firewall_aliases_import.php' => 'https://doc.pfsense.org/index.php/Aliases',
	'firewall_aliases.php' => 'https://doc.pfsense.org/index.php/Aliases',
	'firewall_nat_1to1_edit.php' => 'https://doc.pfsense.org/index.php/1:1_NAT',
	'firewall_nat_1to1.php' => 'https://doc.pfsense.org/index.php/1:1_NAT',
	'firewall_nat_edit.php' => 'https://doc.pfsense.org/index.php/How_can_I_forward_ports_with_pfSense',
	'firewall_nat_npt_edit.php' => 'https://doc.pfsense.org/index.php/NPt',
	'firewall_nat_npt.php' => 'https://doc.pfsense.org/index.php/NPt',
	'firewall_nat_out_edit.php' => 'https://doc.pfsense.org/index.php/Outbound_NAT',
	'firewall_nat_out.php' => 'https://doc.pfsense.org/index.php/Outbound_NAT',
	'firewall_nat.php' => 'https://doc.pfsense.org/index.php/How_can_I_forward_ports_with_pfSense',
	'firewall_rules_edit.php' => 'https://doc.pfsense.org/index.php/Firewall_Rule_Basics',
	'firewall_rules.php' => 'https://doc.pfsense.org/index.php/Firewall_Rule_Basics',
	'firewall_schedule_edit.php' => 'https://doc.pfsense.org/index.php/Firewall_Rule_Schedules',
	'firewall_schedule.php' => 'https://doc.pfsense.org/index.php/Firewall_Rule_Schedules',
	'firewall_shaper.php' => 'https://doc.pfsense.org/index.php/Traffic_Shaping_Guide',
	'firewall_shaper_queues.php' => 'https://doc.pfsense.org/index.php/Traffic_Shaping_Guide',
	'firewall_shaper_vinterface.php' => 'https://doc.pfsense.org/index.php/Limiters',
	'firewall_shaper_wizards.php' => 'https://doc.pfsense.org/index.php/Traffic_Shaping_Guide',
	'firewall_virtual_ip_edit.php' => 'https://doc.pfsense.org/index.php/What_are_Virtual_IP_Addresses',
	'firewall_virtual_ip.php' => 'https://doc.pfsense.org/index.php/What_are_Virtual_IP_Addresses',
	'interfaces_assign.php' => 'https://doc.pfsense.org/index.php/Assign_Interfaces',
	'interfaces_bridge_edit.php' => 'https://doc.pfsense.org/index.php/Interface_Bridges',
	'interfaces_bridge.php' => 'https://doc.pfsense.org/index.php/Interface_Bridges',
	'interfaces_gif_edit.php' => 'https://doc.pfsense.org/index.php/GIF_Interfaces',
	'interfaces_gif.php' => 'https://doc.pfsense.org/index.php/GIF_Interfaces',
	'interfaces_gre_edit.php' => 'https://doc.pfsense.org/index.php/GRE_Interfaces',
	'interfaces_gre.php' => 'https://doc.pfsense.org/index.php/GRE_Interfaces',
	'interfaces_groups_edit.php' => 'https://doc.pfsense.org/index.php/Interface_Groups',
	'interfaces_groups.php' => 'https://doc.pfsense.org/index.php/Interface_Groups',
	'interfaces_lagg_edit.php' => 'https://doc.pfsense.org/index.php/LAGG_Interfaces',
	'interfaces_lagg.php' => 'https://doc.pfsense.org/index.php/LAGG_Interfaces',
	'interfaces.php' => 'https://doc.pfsense.org/index.php/Interface_Settings',
	'interfaces_ppps_edit.php' => 'https://doc.pfsense.org/index.php/PPP_Interfaces',
	'interfaces_ppps.php' => 'https://doc.pfsense.org/index.php/PPP_Interfaces',
	'interfaces_qinq_edit.php' => 'https://doc.pfsense.org/index.php/QinQ_Interfaces',
	'interfaces_qinq.php' => 'https://doc.pfsense.org/index.php/QinQ_Interfaces',
	'interfaces_vlan_edit.php' => 'https://doc.pfsense.org/index.php/VLAN_Trunking',
	'interfaces_vlan.php' => 'https://doc.pfsense.org/index.php/VLAN_Trunking',
	'interfaces_wireless_edit.php' => 'https://doc.pfsense.org/index.php/Wireless_Interfaces',
	'interfaces_wireless.php' => 'https://doc.pfsense.org/index.php/Wireless_Interfaces',
	'miniupnpd.xml' => 'https://doc.pfsense.org/index.php/What_are_UPnP_and_NAT-PMP',
	'openvpn-client-export.xml' => 'https://doc.pfsense.org/index.php/OpenVPN_Client_Exporter', /* Package */
	'pkg_mgr_installed.php' => 'https://doc.pfsense.org/index.php/Package_Manager',
	'pkg_mgr_install.php' => 'https://doc.pfsense.org/index.php/Package_Manager',
	'pkg_mgr.php' => 'https://doc.pfsense.org/index.php/Package_Manager',
	'services_captiveportal_filemanager.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_hostname_edit.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_hostname.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_ip_edit.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_ip.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_mac_edit.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_mac.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_vouchers_edit.php' => 'https://doc.pfsense.org/index.php/Captive_Portal_Vouchers',
	'services_captiveportal_vouchers.php' => 'https://doc.pfsense.org/index.php/Captive_Portal_Vouchers',
	'services_captiveportal_zones_edit.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_captiveportal_zones.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'services_checkip_edit.php' => 'https://doc.pfsense.org/index.php/IP_Address_Check_Services',
	'services_checkip.php' => 'https://doc.pfsense.org/index.php/IP_Address_Check_Services',
	'services_dhcp_edit.php' => 'https://doc.pfsense.org/index.php/DHCP_Server',
	'services_dhcp.php' => 'https://doc.pfsense.org/index.php/DHCP_Server',
	'services_dhcp_relay.php' => 'https://doc.pfsense.org/index.php/DHCP_Relay',
	'services_dhcpv6_edit.php' => 'https://doc.pfsense.org/index.php/DHCPv6_Server',
	'services_dhcpv6.php' => 'https://doc.pfsense.org/index.php/DHCPv6_Server',
	'services_dhcpv6_relay.php' => 'https://doc.pfsense.org/index.php/DHCP_Relay',
	'services_dnsmasq_domainoverride_edit.php' => 'https://doc.pfsense.org/index.php/DNS_Forwarder',
	'services_dnsmasq_edit.php' => 'https://doc.pfsense.org/index.php/DNS_Forwarder',
	'services_dnsmasq.php' => 'https://doc.pfsense.org/index.php/DNS_Forwarder',
	'services_dyndns_edit.php' => 'https://doc.pfsense.org/index.php/Dynamic_DNS',
	'services_dyndns.php' => 'https://doc.pfsense.org/index.php/Dynamic_DNS',
	'services_igmpproxy_edit.php' => 'https://doc.pfsense.org/index.php/IGMP_Proxy',
	'services_igmpproxy.php' => 'https://doc.pfsense.org/index.php/IGMP_Proxy',
	'services_ntpd_acls.php' => 'https://doc.pfsense.org/index.php/NTP_Server',
	'services_ntpd_gps.php' => 'https://doc.pfsense.org/index.php/NTP_Server',
	'services_ntpd.php' => 'https://doc.pfsense.org/index.php/NTP_Server',
	'services_ntpd_pps.php' => 'https://doc.pfsense.org/index.php/NTP_Server',
	'services_pppoe_edit.php' => 'https://doc.pfsense.org/index.php/PPPoE_Server_Settings',
	'services_pppoe.php' => 'https://doc.pfsense.org/index.php/PPPoE_Server_Settings',
	'services_rfc2136_edit.php' => 'https://doc.pfsense.org/index.php/Dynamic_DNS',
	'services_rfc2136.php' => 'https://doc.pfsense.org/index.php/Dynamic_DNS',
	'services_router_advertisements.php' => 'https://doc.pfsense.org/index.php/Router_Advertisements',
	'services_snmp.php' => 'https://doc.pfsense.org/index.php/SNMP_Daemon',
	'services_unbound_acls.php' => 'https://doc.pfsense.org/index.php/Unbound_DNS_Resolver#Access_Lists_Tab',
	'services_unbound_advanced.php' => 'https://doc.pfsense.org/index.php/Unbound_DNS_Resolver#Advanced_Settings_Tab',
	'services_unbound_domainoverride_edit.php' => 'https://doc.pfsense.org/index.php/Unbound_DNS_Resolver',
	'services_unbound_host_edit.php' => 'https://doc.pfsense.org/index.php/Unbound_DNS_Resolver',
	'services_unbound.php' => 'https://doc.pfsense.org/index.php/Unbound_DNS_Resolver',
	'services_wol_edit.php' => 'https://doc.pfsense.org/index.php/Wake_on_LAN',
	'services_wol.php' => 'https://doc.pfsense.org/index.php/Wake_on_LAN',
	'status_captiveportal_expire.php' => 'https://doc.pfsense.org/index.php/Captive_Portal',
	'status_captiveportal.php' => 'https://doc.pfsense.org/index.php/Captive_Portal_Status',
	'status_captiveportal_test.php' => 'https://doc.pfsense.org/index.php/Captive_Portal_Status',
	'status_captiveportal_voucher_rolls.php' => 'https://doc.pfsense.org/index.php/Captive_Portal_Vouchers',
	'status_captiveportal_vouchers.php' => 'https://doc.pfsense.org/index.php/Captive_Portal_Vouchers',
	'status_carp.php' => 'https://doc.pfsense.org/index.php/CARP_Status',
	'status_dhcp_leases.php' => 'https://doc.pfsense.org/index.php/DHCP_Leases',
	'status_dhcpv6_leases.php' => 'https://doc.pfsense.org/index.php/DHCPv6_Leases',
	'status_filter_reload.php' => 'https://doc.pfsense.org/index.php/Filter_Reload_Status',
	'status_gateway_groups.php' => 'https://doc.pfsense.org/index.php/Gateway_Status',
	'status_gateways.php' => 'https://doc.pfsense.org/index.php/Gateway_Status',
	'status_graph_cpu.php' => 'https://doc.pfsense.org/index.php/CPU_Load',
	'status_graph.php' => 'https://doc.pfsense.org/index.php/Traffic_Graph',
	'status_interfaces.php' => 'https://doc.pfsense.org/index.php/Interface_Status',
	'status_ipsec_leases.php' => 'https://doc.pfsense.org/index.php/IPsec_Mobile_Clients',
	'status_ipsec.php' => 'https://doc.pfsense.org/index.php/IPsec_Status',
	'status_ipsec_sad.php' => 'https://doc.pfsense.org/index.php/IPsec_Status',
	'status_ipsec_spd.php' => 'https://doc.pfsense.org/index.php/IPsec_Status',
	'status_logs_filter_dynamic.php' => 'https://doc.pfsense.org/index.php/Firewall_Logs',
	'status_logs_filter.php' => 'https://doc.pfsense.org/index.php/Firewall_Logs',
	'status_logs_filter_summary.php' => 'https://doc.pfsense.org/index.php/Firewall_Logs',
	'status_logs.php-dhcpd' => 'https://doc.pfsense.org/index.php/DHCP_Logs',
	'status_logs.php-gateways' => 'https://doc.pfsense.org/index.php/Gateway_Logs',
	'status_logs.php' => 'https://doc.pfsense.org/index.php/System_Logs',
	'status_logs.php-ipsec' => 'https://doc.pfsense.org/index.php/IPsec_Logs',
	'status_logs.php-ntpd' => 'https://doc.pfsense.org/index.php/NTP_Logs',
	'status_logs.php-openvpn' => 'https://doc.pfsense.org/index.php/OpenVPN_Logs',
	'status_logs.php-portalauth' => 'https://doc.pfsense.org/index.php/Captive_Portal_Authentication_Logs',
	'status_logs.php-ppp' => 'https://doc.pfsense.org/index.php/PPP_Logs',
	'status_logs.php-resolver' => 'https://doc.pfsense.org/index.php/Resolver_Logs',
	'status_logs.php-routing' => 'https://doc.pfsense.org/index.php/Routing_Logs',
	'status_logs.php-wireless' => 'https://doc.pfsense.org/index.php/Wireless_Logs',
	'status_logs_settings.php' => 'https://doc.pfsense.org/index.php/Log_Settings',
	'status_logs_vpn.php' => 'https://doc.pfsense.org/index.php/PPTP_VPN_Logs',
	'status_ntpd.php' => 'https://doc.pfsense.org/index.php/NTP_Server',
	'status_openvpn.php' => 'https://doc.pfsense.org/index.php/OpenVPN_Status',
	'status_pkglogs.php' => 'https://doc.pfsense.org/index.php/Package_Logs',
	'status_queues.php' => 'https://doc.pfsense.org/index.php/Traffic_Shaping_Guide',
	'status_services.php' => 'https://doc.pfsense.org/index.php/Services_Status',
	'status_upnp.php' => 'https://doc.pfsense.org/index.php/What_are_UPnP_and_NAT-PMP',
	'status_wireless.php' => 'https://doc.pfsense.org/index.php/Wireless_Status',
	'system_advanced_admin.php' => 'https://doc.pfsense.org/index.php/Advanced_Setup',
	'system_advanced_firewall.php' => 'https://doc.pfsense.org/index.php/Advanced_Setup#Firewall.2FNAT',
	'system_advanced_misc.php' => 'https://doc.pfsense.org/index.php/Advanced_Setup#Miscellaneous',
	'system_advanced_network.php' => 'https://doc.pfsense.org/index.php/Advanced_Setup#Firewall.2FNAT',
	'system_advanced_notifications.php' => 'https://doc.pfsense.org/index.php/Advanced_Setup#Notifications',
	'system_advanced_sysctl.php' => 'https://doc.pfsense.org/index.php/Advanced_Setup#System_Tunables',
	'system_authservers.php' => 'https://doc.pfsense.org/index.php/User_Authentication_Servers',
	'system_camanager.php' => 'https://doc.pfsense.org/index.php/Certificate_Management',
	'system_certmanager.php' => 'https://doc.pfsense.org/index.php/Certificate_Management',
	'system_crlmanager.php' => 'https://doc.pfsense.org/index.php/Certificate_Management',
	'system_gateway_groups_edit.php' => 'https://doc.pfsense.org/index.php/Gateway_Settings',
	'system_gateway_groups.php' => 'https://doc.pfsense.org/index.php/Gateway_Settings',
	'system_gateways_edit.php' => 'https://doc.pfsense.org/index.php/Gateway_Settings',
	'system_gateways.php' => 'https://doc.pfsense.org/index.php/Gateway_Settings',
	'system_groupmanager_addprivs.php' => 'https://doc.pfsense.org/index.php/Group_Manager',
	'system_groupmanager.php' => 'https://doc.pfsense.org/index.php/Group_Manager',
	'system_hasync.php' => 'https://doc.pfsense.org/index.php/High_Availability',
	'system.php' => 'https://doc.pfsense.org/index.php/General_Setup',
	'system_routes_edit.php' => 'https://doc.pfsense.org/index.php/Static_Routes',
	'system_routes.php' => 'https://doc.pfsense.org/index.php/Static_Routes',
	'system_update_settings.php' => 'https://doc.pfsense.org/index.php/Firmware_Updates',
	'system_usermanager_addprivs.php' => 'https://doc.pfsense.org/index.php/User_Manager',
	'system_usermanager_passwordmg.php' => 'https://doc.pfsense.org/index.php/User_Manager',
	'system_usermanager.php' => 'https://doc.pfsense.org/index.php/User_Manager',
	'system_usermanager_settings.php' => 'https://doc.pfsense.org/index.php/User_Manager',
	'system_user_settings.php' => 'https://doc.pfsense.org/index.php/User_Manager',
	'vpn_ipsec_keys_edit.php' => 'https://doc.pfsense.org/index.php/IPsec_Tunnels',
	'vpn_ipsec_keys.php' => 'https://doc.pfsense.org/index.php/IPsec_Tunnels',
	'vpn_ipsec_mobile.php' => 'https://doc.pfsense.org/index.php/IPsec_Mobile_Clients',
	'vpn_ipsec_phase1.php' => 'https://doc.pfsense.org/index.php/IPsec_Tunnels',
	'vpn_ipsec_phase2.php' => 'https://doc.pfsense.org/index.php/IPsec_Tunnels',
	'vpn_ipsec.php' => 'https://doc.pfsense.org/index.php/IPsec_Tunnels',
	'vpn_ipsec_settings.php' => 'https://doc.pfsense.org/index.php/Advanced_IPsec_Settings',
	'vpn_l2tp.php' => 'https://doc.pfsense.org/index.php/L2TP_VPN_Settings',
	'vpn_l2tp_users_edit.php' => 'https://doc.pfsense.org/index.php/L2TP_VPN_Settings',
	'vpn_l2tp_users.php' => 'https://doc.pfsense.org/index.php/L2TP_VPN_Settings',
	'vpn_openvpn_client.php' => 'https://doc.pfsense.org/index.php/OpenVPN_Settings',
	'vpn_openvpn_csc.php' => 'https://doc.pfsense.org/index.php/OpenVPN_Settings',
	'vpn_openvpn_export.php' => 'https://doc.pfsense.org/index.php/OpenVPN_Client_Exporter', /* Package */
	'vpn_openvpn_export_shared.php' => 'https://doc.pfsense.org/index.php/OpenVPN_Client_Exporter', /* Package */
	'vpn_openvpn_server.php' => 'https://doc.pfsense.org/index.php/OpenVPN_Settings',

	/* Packages from here on down. Not checked as strictly. Pages may not yet exist. */
	'acme/acme_accountkeys_edit.php' => 'https://doc.pfsense.org/index.php/ACME_package',
	'acme/acme_accountkeys.php' => 'https://doc.pfsense.org/index.php/ACME_package',
	'acme/acme_certificates_edit.php' => 'https://doc.pfsense.org/index.php/ACME_package',
	'acme/acme_certificates.php' => 'https://doc.pfsense.org/index.php/ACME_package',
	'acme/acme_generalsettings.php' => 'https://doc.pfsense.org/index.php/ACME_package',
	'acme.xml' => 'https://doc.pfsense.org/index.php/ACME_package',
	'apcupsd_status.php' => 'https://doc.pfsense.org/index.php/Apcupsd_package',
	'apcupsd.xml' => 'https://doc.pfsense.org/index.php/Apcupsd_package',
	'arping.xml' => 'https://doc.pfsense.org/index.php/Arping_package',
	'autoconfigbackup_backup.php' => 'https://doc.pfsense.org/index.php/AutoConfigBackup',
	'autoconfigbackup.php' => 'https://doc.pfsense.org/index.php/AutoConfigBackup',
	'autoconfigbackup_stats.php' => 'https://doc.pfsense.org/index.php/AutoConfigBackup',
	'autoconfigbackup.xml' => 'https://doc.pfsense.org/index.php/AutoConfigBackup',
	'avahi.xml' => 'https://doc.pfsense.org/index.php/Avahi_package',
	'backup.xml' => 'https://doc.pfsense.org/index.php/Backup_package',
	'bind_acls.xml' => 'https://doc.pfsense.org/index.php/BIND_package',
	'bind_sync.xml' => 'https://doc.pfsense.org/index.php/BIND_package',
	'bind_views.xml' => 'https://doc.pfsense.org/index.php/BIND_package',
	'bind.xml' => 'https://doc.pfsense.org/index.php/BIND_package',
	'bind_zones.xml' => 'https://doc.pfsense.org/index.php/BIND_package',
	'blinkled.xml' => 'https://doc.pfsense.org/index.php/BlinkLED_Package',
	'cellular.xml' => 'https://doc.pfsense.org/index.php/Cellular_package',
	'cron.xml' => 'https://doc.pfsense.org/index.php/Cron_package',
	'darkstat.xml' => 'https://doc.pfsense.org/index.php/How_can_I_monitor_bandwidth_usage',
	'freeradiusauthorizedmacs.xml' => 'https://doc.pfsense.org/index.php/Plain_MAC_Authentication_with_FreeRADIUS',
	'freeradiuscerts.xml' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'freeradiusclients.xml' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'freeradiuseapconf.xml' => 'https://doc.pfsense.org/index.php/Using_EAP_and_PEAP_with_FreeRADIUS',
	'freeradiusinterfaces.xml' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'freeradiusmodulesldap.xml' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'freeradiussettings.xml' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'freeradiussqlconf.xml' => 'https://doc.pfsense.org/index.php/Using_MySQL_with_FreeRADIUS',
	'freeradiussync.xml' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'freeradius_view_config.php' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'freeradius.xml' => 'https://doc.pfsense.org/index.php/FreeRADIUS_2.x_package',
	'ftpproxy.xml' => 'https://doc.pfsense.org/index.php/FTP_Proxy_package',
	'gwled.php' => 'https://doc.pfsense.org/index.php/Gwled_package',
	'gwled.xml' => 'https://doc.pfsense.org/index.php/Gwled_package',
	'haproxy/haproxy_files.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy/haproxy_global.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy/haproxy_listeners_edit.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy/haproxy_listeners.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy/haproxy_pool_edit.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy/haproxy_pools.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy/haproxy_stats.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy/haproxy_templates.php' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'haproxy.xml' => 'https://doc.pfsense.org/index.php/Haproxy_package',
	'iftop.xml' => 'https://doc.pfsense.org/index.php/Iftop_package',
	'iperfserver.xml' => 'https://doc.pfsense.org/index.php/Iperf_package',
	'iperf.xml' => 'https://doc.pfsense.org/index.php/Iperf_package',
	'ladvd.xml' => 'https://doc.pfsense.org/index.php/LADVD_package',
	'lcdproc.xml' => 'https://doc.pfsense.org/index.php/LCDProc_package',
	'lightsquid.xml' => 'https://doc.pfsense.org/index.php/Lightsquid_package',
	'mailreport.xml' => 'https://doc.pfsense.org/index.php/Mail_Reports_package',
	'mtr-nox11.xml' => 'https://doc.pfsense.org/index.php/MTR_package',
	'net-snmp_communities.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmptrapd_communities.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmptrapd_formats.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmptrapd_forwards.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmptrapd_traphandles.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmptrapd_users.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmptrapd.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmp_trapgen.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmp_users.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'net-snmp.xml' => 'https://doc.pfsense.org/index.php/NET-SNMP_package',
	'nmap.xml' => 'https://doc.pfsense.org/index.php/Nmap_package',
	'notes.xml' => 'https://doc.pfsense.org/index.php/Notes_package',
	'nrpe.xml' => 'https://doc.pfsense.org/index.php/NRPE_package',
	'ntopng.xml' => 'https://doc.pfsense.org/index.php/How_can_I_monitor_bandwidth_usage',
	'nut_settings.php' => 'https://doc.pfsense.org/index.php/Nut_package',
	'nut_status.php' => 'https://doc.pfsense.org/index.php/Nut_package',
	'nut.xml' => 'https://doc.pfsense.org/index.php/Nut_package',
	'openbgpd_groups.xml' => 'https://doc.pfsense.org/index.php/OpenBGPD_package',
	'openbgpd_neighbors.xml' => 'https://doc.pfsense.org/index.php/OpenBGPD_package',
	'openbgpd_raw.php' => 'https://doc.pfsense.org/index.php/OpenBGPD_package',
	'openbgpd_status.php' => 'https://doc.pfsense.org/index.php/OpenBGPD_package',
	'openbgpd.xml' => 'https://doc.pfsense.org/index.php/OpenBGPD_package',
	'open-vm-tools.xml' => 'https://doc.pfsense.org/index.php/Open_VM_Tools_package',
	'packages/backup/backup_edit.php' => 'https://doc.pfsense.org/index.php/Backup_package',
	'packages/backup/backup.php' => 'https://doc.pfsense.org/index.php/Backup_package',
	'packages/cron/cron_edit.php' => 'https://doc.pfsense.org/index.php/Cron_package',
	'packages/cron/cron.php' => 'https://doc.pfsense.org/index.php/Cron_package',
	'packages/cron/index.php' => 'https://doc.pfsense.org/index.php/Cron_package',
	'packages/lcdproc/index.php' => 'https://doc.pfsense.org/index.php/LCDProc_package',
	'packages/lcdproc/lcdproc.php' => 'https://doc.pfsense.org/index.php/LCDProc_package',
	'packages/lcdproc/lcdproc_screens.php' => 'https://doc.pfsense.org/index.php/LCDProc_package',
	'pfblockerng/pfblockerng_alerts_ar.php' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_alerts.php' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_dnsbl_easylist.xml' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_dnsbl_lists.xml' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_dnsbl.xml' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_log.php' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng.php' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_sync.xml' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_threats.php' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_update.php' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_v4lists.xml' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/pfblockerng_v6lists.xml' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng/www/index.php' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'pfblockerng.xml' => 'https://doc.pfsense.org/index.php/Pfblocker',
	'quagga_ospfd_interfaces.xml' => 'https://doc.pfsense.org/index.php/Quagga_package',
	'quagga_ospfd_raw.xml' => 'https://doc.pfsense.org/index.php/Quagga_package',
	'quagga_ospfd.xml' => 'https://doc.pfsense.org/index.php/Quagga_package',
	'routed.xml' => 'https://doc.pfsense.org/index.php/Routing_Information_Protocol_(RIP)', # RIP
	'services_servicewatchdog_add.php' => 'https://doc.pfsense.org/index.php/Service_Watchdog_package',
	'services_servicewatchdog.php' => 'https://doc.pfsense.org/index.php/Service_Watchdog_package',
	'servicewatchdog.xml' => 'https://doc.pfsense.org/index.php/Service_Watchdog_package',
	'shellcmd.xml' => 'https://doc.pfsense.org/index.php/Executing_commands_at_boot_time',
	'siproxd_registered_phones.php' => 'https://doc.pfsense.org/index.php/Siproxd_package',
	'siproxdusers.xml' => 'https://doc.pfsense.org/index.php/Siproxd_package',
	'siproxd.xml' => 'https://doc.pfsense.org/index.php/Siproxd_package',
	'snort/snort_alerts.php' => 'https://doc.pfsense.org/index.php/Snort_alerts',
	'snort/snort_barnyard.php' => 'https://doc.pfsense.org/index.php/Snort_barnyard2',
	'snort/snort_blocked.php' => 'https://doc.pfsense.org/index.php/Snort_blocked_hosts',
	'snort/snort_define_servers.php' => 'https://doc.pfsense.org/index.php/Snort_define_servers',
	'snort/snort_download_rules.php' => 'https://doc.pfsense.org/index.php/Snort_updates',
	'snort/snort_download_updates.php' => 'https://doc.pfsense.org/index.php/Snort_updates',
	'snort/snort_edit_hat_data.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_frag3_engine.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_ftp_client_engine.php' => 'https://doc.pfsense.org/index.php/Snort_preprocessors',
	'snort/snort_ftp_server_engine.php' => 'https://doc.pfsense.org/index.php/Snort_preprocessors',
	'snort/snort_httpinspect_engine.php' => 'https://doc.pfsense.org/index.php/Snort_preprocessors',
	'snort/snort_import_aliases.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_interface_logs.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_interfaces_edit.php' => 'https://doc.pfsense.org/index.php/Snort_interfaces_edit',
	'snort/snort_interfaces_global.php' => 'https://doc.pfsense.org/index.php/Snort_interfaces_global',
	'snort/snort_interfaces.php' => 'https://doc.pfsense.org/index.php/Snort_interfaces',
	'snort/snort_interfaces_suppress_edit.php' => 'https://doc.pfsense.org/index.php/Snort_suppress_list',
	'snort/snort_interfaces_suppress.php' => 'https://doc.pfsense.org/index.php/Snort_suppress_list',
	'snort/snort_ip_list_mgmt.php' => 'https://doc.pfsense.org/index.php/Snort_ip_list_mgmt',
	'snort/snort_iprep_list_browser.php' => 'https://doc.pfsense.org/index.php/Snort_ip_reputation',
	'snort/snort_ip_reputation.php' => 'https://doc.pfsense.org/index.php/Snort_ip_reputation_preprocessor',
	'snort/snort_list_view.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_log_mgmt.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_passlist_edit.php' => 'https://doc.pfsense.org/index.php/Snort_passlist',
	'snort/snort_passlist.php' => 'https://doc.pfsense.org/index.php/Snort_passlist',
	'snort/snort_preprocessors.php' => 'https://doc.pfsense.org/index.php/Snort_preprocessors',
	'snort/snort_rules_edit.php' => 'https://doc.pfsense.org/index.php/Snort_rules',
	'snort/snort_rulesets.php' => 'https://doc.pfsense.org/index.php/Snort_rulesets',
	'snort/snort_rules_flowbits.php' => 'https://doc.pfsense.org/index.php/Snort_rules',
	'snort/snort_rules.php' => 'https://doc.pfsense.org/index.php/Snort_rules',
	'snort/snort_select_alias.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_sid_mgmt.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_stream5_engine.php' => 'https://doc.pfsense.org/index.php/Category:Snort',
	'snort/snort_sync.xml' => 'https://doc.pfsense.org/index.php/Snort_sync',
	'snort.xml' => 'https://doc.pfsense.org/index.php/Setup_Snort_Package',
	'softflowd.xml' => 'https://doc.pfsense.org/index.php/Exporting_NetFlow_with_softflowd',
	'sqstat/sqstat.class.php' => 'https://doc.pfsense.org/index.php/Sqstat_package',
	'sqstat/sqstat.php' => 'https://doc.pfsense.org/index.php/Sqstat_package',
	'squid_antivirus.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_auth.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_cache.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squidguard_acl.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidguard_default.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidguard_dest.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidguard_rewr.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidGuard/squidguard_blacklist.php' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidGuard/squidguard_log.php' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidguard_sync.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidguard_time.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidguard.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squidguard.xml' => 'https://doc.pfsense.org/index.php/SquidGuard_package',
	'squid_log_parser.php' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_monitor_data.php' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_monitor.php' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_reverse_general.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_reverse_peer.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_reverse_redir.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_reverse_sync.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_reverse_uri.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_sync.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_traffic.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_upstream.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid_users.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'squid.xml' => 'https://doc.pfsense.org/index.php/Category:Squid',
	'status_ladvd.php' => 'https://doc.pfsense.org/index.php/LADVD_package',
	'status_mail_report_add_cmd.php' => 'https://doc.pfsense.org/index.php/Mail_Reports_package',
	'status_mail_report_add_log.php' => 'https://doc.pfsense.org/index.php/Mail_Reports_package',
	'status_mail_report_edit.php' => 'https://doc.pfsense.org/index.php/Mail_Reports_package',
	'status_mail_report.php' => 'https://doc.pfsense.org/index.php/Mail_Reports_package',
	'status_ospfd.php' => 'https://doc.pfsense.org/index.php/Quagga_package',
	'status_tinc.php' => 'https://doc.pfsense.org/index.php/Tinc_package',
	'status_traffic_totals.php' => 'https://doc.pfsense.org/index.php/Traffic_Totals_package',
	'stunnel_certs.xml' => 'https://doc.pfsense.org/index.php/Stunnel_package',
	'stunnel.xml' => 'https://doc.pfsense.org/index.php/Stunnel_package',
	'sudo.xml' => 'https://doc.pfsense.org/index.php/Sudo_Package',
	'suricata/suricata_alerts.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_app_parsers.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_barnyard.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_blocked.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_define_vars.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_download_rules.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_download_updates.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_flow_stream.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_global.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_import_aliases.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_interfaces_edit.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_interfaces.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_ip_list_mgmt.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_iprep_list_browser.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_ip_reputation.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_libhtp_policy_engine.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_list_view.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_logs_browser.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_logs_mgmt.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_os_policy_engine.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_passlist_edit.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_passlist.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_rules_edit.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_rulesets.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_rules_flowbits.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_rules.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_select_alias.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_sid_mgmt.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_suppress_edit.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_suppress.php' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata/suricata_sync.xml' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'suricata.xml' => 'https://doc.pfsense.org/index.php/Suricata_package',
	'syslog-ng_advanced.xml' => 'https://doc.pfsense.org/index.php/Syslog-ng_package',
	'syslog-ng_log_viewer.php' => 'https://doc.pfsense.org/index.php/Syslog-ng_package',
	'syslog-ng.xml' => 'https://doc.pfsense.org/index.php/Syslog-ng_package',
	'system_patches_edit.php' => 'https://doc.pfsense.org/index.php/System_Patches',
	'system_patches.php' => 'https://doc.pfsense.org/index.php/System_Patches',
	'systempatches.xml' => 'https://doc.pfsense.org/index.php/System_Patches',
	'tftpd.xml' => 'https://doc.pfsense.org/index.php/Tftpd_package',
	'tftp_files.php' => 'https://doc.pfsense.org/index.php/Tftpd_package',
	'tinc_hosts.xml' => 'https://doc.pfsense.org/index.php/Tinc_package',
	'tinc.xml' => 'https://doc.pfsense.org/index.php/Tinc_package',
	'vpc_vpn_wizard.xml' => 'https://www.netgate.com/docs/pfsense/solutions/aws-vpn-appliance/vpc-wizard-guide.html',
	'zabbix-agent-lts.xml' => 'https://doc.pfsense.org/index.php/Zabbix_Agent_package',
	'zabbix-proxy-lts.xml' => 'https://doc.pfsense.org/index.php/Zabbix_Proxy_package',
);

$pagename = "";
/* Check for parameter "page". */
if ($_REQUEST && isset($_REQUEST['page'])) {
	$pagename = $_REQUEST['page'];
}

/* If "page" is not found, check referring URL */
if (empty($pagename)) {
	/* Attempt to parse out filename */
	$uri_split = "";
	preg_match("/\/(.*)\?(.*)/", $_SERVER["HTTP_REFERER"], $uri_split);

	/* If there was no match, there were no parameters, just grab the filename
		Otherwise, use the matched filename from above. */
	if (empty($uri_split[0])) {
		$pagename = ltrim(parse_url($_SERVER["HTTP_REFERER"], PHP_URL_PATH), '/');
	} else {
		$pagename = $uri_split[1];
	}

	/* If the referrer was index.php then this was a redirect to help.php
	   because help.php was the first page the user has priv to.
	   In that case we do not want to redirect off to the dashboard help. */
	if ($pagename == "index.php") {
		$pagename = "";
	}

	/* If the filename is pkg_edit.php or wizard.php, reparse looking
		for the .xml filename */
	if (($pagename == "pkg.php") || ($pagename == "pkg_edit.php") || ($pagename == "wizard.php")) {
		$param_split = explode('&', $uri_split[2]);
		foreach ($param_split as $param) {
			if (substr($param, 0, 4) == "xml=") {
				$xmlfile = explode('=', $param);
				$pagename = $xmlfile[1];
			}
		}
	}
}

/* Using the derived page name, attempt to find in the URL mapping hash */
if (strlen($pagename) > 0) {
	if (array_key_exists($pagename, $helppages)) {
		$helppage = $helppages[$pagename];
	} else {
		// If no specific page was found, use a generic help page
		$helppage = 'https://doc.pfsense.org/index.php/No_Help_Found';
	}

	/* Redirect to help page. */
	header("Location: {$helppage}");
}

// No page name was determined, so show a message.
$pgtitle = array(gettext("Help"), gettext("About this Page"));
require_once("head.inc");

if (is_array($allowedpages) && str_replace('*', '', $allowedpages[0]) == "help.php") {
	if (count($allowedpages) == 1) {
		print_info_box(gettext("The Help page is the only page this user has privilege for."));
	} else {
		print_info_box(gettext("Displaying the Help page because it is the first page this user has privilege for."));
	}
} else {
	print_info_box(gettext("Help page accessed directly without any page parameter."));
}

include("foot.inc");
?>
