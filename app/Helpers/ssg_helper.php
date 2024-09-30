<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

function ssg_definitions()
{
    $ssg_definitions = array();

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'C2S for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_C2S';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (enhanced)';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_enhanced';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (high)';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_high';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (intermediary)';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_intermediary';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (minimal)';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_minimal';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 2 - Server';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 1 - Server';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_server_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 1 - Workstation';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 2 - Workstation';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l2';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'Criminal Justice Information Services (CJIS) Security Policy';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cjis';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'Unclassified Information in Non-federal Information Systems and Organizations (NIST 800-171)';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'Australian Cyber Security Centre (ACSC) Essential Eight';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_e8';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'Health Insurance Portability and Accountability Act (HIPAA)';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_hipaa';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'NIST National Checklist Program Security Guide';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ncp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'OSPP - Protection Profile for General Purpose Operating Systems v4.2.1';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ospp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'PCI-DSS v4.0 Control Baseline for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_pci-dss';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'RHV hardening based on STIG for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_rhelh-stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'VPP - Protection Profile for Virtualization v. 1.0 for Red Hat Virtualization';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_rhelh-vpp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'Red Hat Corporate Profile for Certified Cloud Providers (RH CCP)';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_rht-ccp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'Standard System Security Profile for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_standard';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'DISA STIG for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'CentOS';
    $item->os_version = '7';
    $item->title = 'DISA STIG with GUI for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-centos7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig_gui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'ANSSI-BP-028 (enhanced)';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_enhanced';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'ANSSI-BP-028 (high)';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_high';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'ANSSI-BP-028 (intermediary)';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_intermediary';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'ANSSI-BP-028 (minimal)';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_minimal';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'Profile for ANSSI DAT-NT28 Average (Intermediate) Level';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_np_nt28_average';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'Profile for ANSSI DAT-NT28 High (Enforced) Level';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_np_nt28_high';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'Profile for ANSSI DAT-NT28 Minimal Level';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_np_nt28_minimal';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'Profile for ANSSI DAT-NT28 Restrictive Level';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_np_nt28_restrictive';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Debian';
    $item->os_version = '12';
    $item->title = 'Standard System Security Profile for Debian 12';
    $item->file = 'ssg-debian12-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_standard';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'C2S for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_C2S';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (enhanced)';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_enhanced';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (high)';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_high';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (intermediary)';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_intermediary';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'ANSSI-BP-028 (minimal)';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_nt28_minimal';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 2 - Server';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 1 - Server';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_server_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 1 - Workstation';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'CIS Red Hat Enterprise Linux 7 Benchmark for Level 2 - Workstation';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l2';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'Criminal Justice Information Services (CJIS) Security Policy';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cjis';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'Unclassified Information in Non-federal Information Systems and Organizations (NIST 800-171)';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'Australian Cyber Security Centre (ACSC) Essential Eight';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_e8';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'Health Insurance Portability and Accountability Act (HIPAA)';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_hipaa';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'NIST National Checklist Program Security Guide';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ncp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'OSPP - Protection Profile for General Purpose Operating Systems v4.2.1';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ospp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'PCI-DSS v4.0 Control Baseline for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_pci-dss';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'RHV hardening based on STIG for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_rhelh-stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'VPP - Protection Profile for Virtualization v. 1.0 for Red Hat Virtualization';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_rhelh-vpp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'Red Hat Corporate Profile for Certified Cloud Providers (RH CCP)';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_rht-ccp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'Standard System Security Profile for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_standard';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'DISA STIG for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '7';
    $item->title = 'DISA STIG with GUI for Red Hat Enterprise Linux 7';
    $item->file = 'ssg-rhel7-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig_gui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'ANSSI-BP-028 (enhanced)';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_enhanced';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'ANSSI-BP-028 (high)';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_high';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'ANSSI-BP-028 (intermediary)';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_intermediary';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'ANSSI-BP-028 (minimal)';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_minimal';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'CIS Red Hat Enterprise Linux 8 Benchmark for Level 2 - Server';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'CIS Red Hat Enterprise Linux 8 Benchmark for Level 1 - Server';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_server_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'CIS Red Hat Enterprise Linux 8 Benchmark for Level 1 - Workstation';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'CIS Red Hat Enterprise Linux 8 Benchmark for Level 2 - Workstation';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l2';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'Unclassified Information in Non-federal Information Systems and Organizations (NIST 800-171)';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'Australian Cyber Security Centre (ACSC) Essential Eight';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_e8';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'Health Insurance Portability and Accountability Act (HIPAA)';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_hipaa';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'Australian Cyber Security Centre (ACSC) ISM Official';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ism_o';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'Protection Profile for General Purpose Operating Systems';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ospp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'PCI-DSS v4.0 Control Baseline for Red Hat Enterprise Linux 8';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_pci-dss';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'DISA STIG for Red Hat Enterprise Linux 8';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '8';
    $item->title = 'DISA STIG with GUI for Red Hat Enterprise Linux 8';
    $item->file = 'ssg-rhel8-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig_gui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'ANSSI-BP-028 (enhanced)';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_enhanced';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'ANSSI-BP-028 (high)';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_high';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'ANSSI-BP-028 (intermediary)';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_intermediary';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'ANSSI-BP-028 (minimal)';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_minimal';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'Centro Criptológico Nacional (CCN) - STIC for Red Hat Enterprise Linux 9 - Advanced';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ccn_advanced';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'Centro Criptológico Nacional (CCN) - STIC for Red Hat Enterprise Linux 9 - Basic';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ccn_basic';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'Centro Criptológico Nacional (CCN) - STIC for Red Hat Enterprise Linux 9 - Intermediate';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ccn_intermediate';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'CIS Red Hat Enterprise Linux 9 Benchmark for Level 2 - Server';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'CIS Red Hat Enterprise Linux 9 Benchmark for Level 1 - Server';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_server_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'CIS Red Hat Enterprise Linux 9 Benchmark for Level 1 - Workstation';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'CIS Red Hat Enterprise Linux 9 Benchmark for Level 2 - Workstation';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l2';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'DRAFT - Unclassified Information in Non-federal Information Systems and Organizations (NIST 800-171)';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'Australian Cyber Security Centre (ACSC) Essential Eight';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_e8';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'Health Insurance Portability and Accountability Act (HIPAA)';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_hipaa';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'Australian Cyber Security Centre (ACSC) ISM Official';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ism_o';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'Protection Profile for General Purpose Operating Systems';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_ospp';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'PCI-DSS v4.0 Control Baseline for Red Hat Enterprise Linux 9';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_pci-dss';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'DISA STIG for Red Hat Enterprise Linux 9';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'RedHat';
    $item->os_version = '9';
    $item->title = 'DISA STIG with GUI for Red Hat Enterprise Linux 9';
    $item->file = 'ssg-rhel9-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig_gui';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'ANSSI-BP-028 (enhanced)';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_enhanced';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'ANSSI-BP-028 (high)';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_high';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'ANSSI-BP-028 (intermediary)';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_intermediary';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'ANSSI-BP-028 (minimal)';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_anssi_bp28_minimal';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'CIS SUSE Linux Enterprise 15 Benchmark for Level 2 - Server';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'CIS SUSE Linux Enterprise 15 Benchmark for Level 1 - Server';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_server_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'CIS SUSE Linux Enterprise 15 Benchmark for Level 1 - Workstation';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l1';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'CIS SUSE Linux Enterprise 15 Benchmark Level 2 - Workstation';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_workstation_l2';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'Health Insurance Portability and Accountability Act (HIPAA)';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_hipaa';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'PCI-DSS v4 Control Baseline for SUSE Linux enterprise 15';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_pci-dss-4';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'Hardening for Public Cloud Image of SUSE Linux Enterprise Server (SLES) for SAP Applications 15';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_pcs-hardening-sap';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'Public Cloud Hardening for SUSE Linux Enterprise 15';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_pcs-hardening';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'Standard System Security Profile for SUSE Linux Enterprise 15';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_standard';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'SLES';
    $item->os_version = '15';
    $item->title = 'DISA STIG for SUSE Linux Enterprise 15';
    $item->file = 'ssg-sle15-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '20.04';
    $item->title = 'CIS Ubuntu 20.04 Level 1 Server Benchmark';
    $item->file = 'ssg-ubuntu2004-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level1_server';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '20.04';
    $item->title = 'CIS Ubuntu 20.04 Level 1 Workstation Benchmark';
    $item->file = 'ssg-ubuntu2004-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level1_workstation';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '20.04';
    $item->title = 'CIS Ubuntu 20.04 Level 2 Server Benchmark';
    $item->file = 'ssg-ubuntu2004-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level2_server';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '20.04';
    $item->title = 'CIS Ubuntu 20.04 Level 2 Workstation Benchmark';
    $item->file = 'ssg-ubuntu2004-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level2_workstation';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '20.04';
    $item->title = 'Standard System Security Profile for Ubuntu 20.04';
    $item->file = 'ssg-ubuntu2004-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_standard';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '20.04';
    $item->title = 'Canonical Ubuntu 20.04 LTS Security Technical Implementation Guide (STIG) V1R9';
    $item->file = 'ssg-ubuntu2004-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '22.04';
    $item->title = 'CIS Ubuntu 22.04 Level 1 Server Benchmark';
    $item->file = 'ssg-ubuntu2204-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level1_server';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '22.04';
    $item->title = 'CIS Ubuntu 22.04 Level 1 Workstation Benchmark';
    $item->file = 'ssg-ubuntu2204-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level1_workstation';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '22.04';
    $item->title = 'CIS Ubuntu 22.04 Level 2 Server Benchmark';
    $item->file = 'ssg-ubuntu2204-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level2_server';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '22.04';
    $item->title = 'CIS Ubuntu 22.04 Level 2 Workstation Benchmark';
    $item->file = 'ssg-ubuntu2204-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_cis_level2_workstation';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '22.04';
    $item->title = 'Standard System Security Profile for Ubuntu 22.04';
    $item->file = 'ssg-ubuntu2204-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_standard';
    $ssg_definitions[] = $item;

    $item = new \stdClass();
    $item->os_family = 'Ubuntu';
    $item->os_version = '22.04';
    $item->title = 'DRAFT Canonical Ubuntu 22.04 LTS Security Technical Implementation Guide (STIG) DRAFT';
    $item->file = 'ssg-ubuntu2204-ds-1.2.xml';
    $item->benchmark = 'xccdf_org.ssgproject.content_profile_stig';
    $ssg_definitions[] = $item;

    // $item = new \stdClass();
    // $item->os_family = 'Windows 10';
    // $item->os_version = '';
    // $item->title = 'Microsoft Windows 10 STIG';
    // $item->file = 'WindowsClient-10-2.9.xml';
    // $item->benchmark = 'Microsoft_Windows_10_STIG';
    // $ssg_definitions[] = $item;

    // $item = new \stdClass();
    // $item->os_family = 'Windows 11';
    // $item->os_version = '';
    // $item->title = 'Microsoft Windows 11 STIG';
    // $item->file = 'WindowsClient-11-1.6.xml';
    // $item->benchmark = 'Microsoft_Windows_11_STIG';
    // $ssg_definitions[] = $item;

    // $item = new \stdClass();
    // $item->os_family = 'Windows 2016';
    // $item->os_version = '';
    // $item->title = 'Microsoft Windows 2016 STIG';
    // $item->file = 'WindowsServer-2016-MS-2.8.xml';
    // $item->benchmark = 'Microsoft_Windows_Server_2016_STIG';
    // $ssg_definitions[] = $item;

    // $item = new \stdClass();
    // $item->os_family = 'Windows 2019';
    // $item->os_version = '';
    // $item->title = 'Microsoft Windows 2019 STIG';
    // $item->file = 'WindowsServer-2019-MS-2.9.xml';
    // $item->benchmark = 'Microsoft_Windows_Server_2019_STIG';
    // $ssg_definitions[] = $item;

    // $item = new \stdClass();
    // $item->os_family = 'Windows 2022';
    // $item->os_version = '';
    // $item->title = 'Microsoft Windows 2022 STIG';
    // $item->file = 'WindowsServer-2022-MS-1.5.xml';
    // $item->benchmark = 'Microsoft_Windows_Server_2022_STIG';
    // $ssg_definitions[] = $item;

    return $ssg_definitions;
}
